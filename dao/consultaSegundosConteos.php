<?php

include_once('db/db_Inventario.php');


$area = $_GET['area'];

ContadorApu($area);

function ContadorApu($area)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT 
    Bitacora_Inventario.NumeroParte, 
    Bitacora_Inventario.FolioMarbete,
    Bitacora_Inventario.PrimerConteo AS CantidadBitacora, 
    IFNULL(InventarioSap.Cantidad, 0) AS CantidadInventarioSap, 
    Bitacora_Inventario.StorageBin
FROM 
    Bitacora_Inventario 
LEFT JOIN 
    InventarioSap ON Bitacora_Inventario.NumeroParte = InventarioSap.GrammerNo 
    AND Bitacora_Inventario.StorageBin = InventarioSap.STBin 
WHERE 
    Bitacora_Inventario.Area = $area
    AND Bitacora_Inventario.Estatus = 1
    AND (InventarioSap.GrammerNo IS NULL 
    OR Bitacora_Inventario.PrimerConteo != InventarioSap.Cantidad
    OR InventarioSap.Cantidad = 0
    OR Bitacora_Inventario.PrimerConteo = 0
    OR ABS(Bitacora_Inventario.PrimerConteo - IFNULL(InventarioSap.Cantidad, 0)) >= 10000)

UNION

SELECT 
    InventarioSap.GrammerNo AS NumeroParte, 
    NULL AS FolioMarbete,
    IFNULL(Bitacora_Inventario.PrimerConteo, 0) AS CantidadBitacora, 
    InventarioSap.Cantidad AS CantidadInventarioSap, 
    InventarioSap.STBin AS StorageBin
FROM 
    InventarioSap 
LEFT JOIN 
    Bitacora_Inventario ON InventarioSap.GrammerNo = Bitacora_Inventario.NumeroParte 
    AND InventarioSap.STBin = Bitacora_Inventario.StorageBin 
WHERE 
    InventarioSap.AreaCve = $area
    AND (Bitacora_Inventario.NumeroParte IS NULL 
    OR Bitacora_Inventario.PrimerConteo != InventarioSap.Cantidad
    OR InventarioSap.Cantidad = 0
    OR IFNULL(Bitacora_Inventario.PrimerConteo, 0) = 0
    OR ABS(IFNULL(Bitacora_Inventario.PrimerConteo, 0) - InventarioSap.Cantidad) >= 10000);");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>