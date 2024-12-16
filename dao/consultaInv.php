<?php

include_once('db/db_Inventario.php');


//$marbete = $_GET['marbete'];

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SET @row_number = 0;
SET @storage_bin = '';

(SELECT 
    InventoryItem,
    StorageType,
    StorageBin,
    StorageBinConsecutivo,
    NumeroParte,
    Plant,
    Cantidad,
    StorageUnit
FROM 
(
    SELECT 
        (SELECT `InventoryItem` FROM `InvSap` WHERE `StorageType` = Storage_Unit.Storage_Type and `StorageBin` = Storage_Unit.Storage_Bin LIMIT 1) AS InventoryItem,
        Storage_Unit.Storage_Type AS StorageType,
        Storage_Unit.Storage_Bin AS StorageBin,
        CASE
            WHEN @storage_bin = Storage_Unit.Storage_Bin THEN @row_number := @row_number + 1
            ELSE @row_number := 1
        END AS StorageBinConsecutivo,
        CASE
            WHEN @storage_bin != Storage_Unit.Storage_Bin THEN @storage_bin := Storage_Unit.Storage_Bin
        END,
        Storage_Unit.Numero_Parte AS NumeroParte,
        (SELECT `Plant` FROM `InvSap` WHERE `StorageBin` = Storage_Unit.Storage_Bin and `StorageType` = Storage_Unit.Storage_Type LIMIT 1) AS Plant,
        Storage_Unit.Cantidad AS Cantidad,
        Storage_Unit.Id_StorageUnit AS StorageUnit
    FROM 
        Storage_Unit
    LEFT JOIN 
        InvSap ON Storage_Unit.Numero_Parte = InvSap.Material AND Storage_Unit.Storage_Bin = InvSap.StorageBin AND Storage_Unit.Storage_Type = InvSap.StorageType
    WHERE 
        InvSap.Material IS NULL
    ORDER BY 
        Storage_Unit.Storage_Bin, StorageBinConsecutivo
) AS T
WHERE 
    InventoryItem IS NOT NULL AND InventoryItem != '')

UNION

(SELECT 
    InventoryItem,
    StorageType,
    StorageBin,
    NULL AS StorageBinConsecutivo,
    NumeroParte,
    Plant,
    Cantidad,
    NULL AS StorageUnit
FROM 
(
    SELECT 
        (SELECT `InventoryItem` FROM `InvSap` WHERE `StorageType` = Bitacora_Inventario.StorageType and `StorageBin` = Bitacora_Inventario.StorageBin LIMIT 1) AS InventoryItem,
        Bitacora_Inventario.StorageType AS StorageType,
        Bitacora_Inventario.StorageBin AS StorageBin,
        Bitacora_Inventario.NumeroParte AS NumeroParte,
        (SELECT `Plant` FROM `InvSap` WHERE `StorageBin` = Bitacora_Inventario.StorageBin and `StorageType` = Bitacora_Inventario.StorageType LIMIT 1) AS Plant,
        CASE 
            WHEN Bitacora_Inventario.TercerConteo IS NOT NULL THEN Bitacora_Inventario.TercerConteo
            WHEN Bitacora_Inventario.SegundoConteo IS NOT NULL THEN Bitacora_Inventario.SegundoConteo
            ELSE Bitacora_Inventario.PrimerConteo
        END AS Cantidad
    FROM 
        Bitacora_Inventario
    LEFT JOIN 
        InvSap ON Bitacora_Inventario.NumeroParte = InvSap.Material AND Bitacora_Inventario.StorageBin = InvSap.StorageBin AND Bitacora_Inventario.StorageType = InvSap.StorageType
    WHERE 
        InvSap.Material IS NULL
) AS T
WHERE 
    InventoryItem IS NOT NULL AND InventoryItem != '');");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>