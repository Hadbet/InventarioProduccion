<?php

include_once('db/db_Inventario.php');


$marbete = $_GET['marbete'];
$parts = explode('.', $marbete);

$marbeteSolo = $parts[0];
$conteo = $parts[1];

ContadorApu($marbeteSolo,$conteo);

function ContadorApu($marbeteSolo,$conteo)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT SU.`Id_StorageUnit`, SU.`Numero_Parte`, SU.`Cantidad`, SU.`Storage_Bin`, SU.`Storage_Type`, SU.`Estatus`, SU.`FolioMarbete`, SU.`Conteo`, BI.* 
FROM `Storage_Unit` AS SU
JOIN `Bitacora_Inventario` AS BI ON SU.`FolioMarbete` = BI.`FolioMarbete`
WHERE SU.FolioMarbete = '$marbeteSolo' and SU.Conteo = '$conteo' and SU.Estatus = 1 and BI.Estatus = 1;");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>