<?php

include_once('db/db_Inventario.php');


$area = $_GET['area'];

ContadorApu($area);

function ContadorApu($area)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT COUNT(*) AS CantidadDiferencias
FROM InventarioSap AS InvSap
INNER JOIN Bitacora_Inventario AS BI ON InvSap.GrammerNo = BI.NumeroParte AND InvSap.AreaCve = BI.Area
WHERE InvSap.AreaCve = $area AND InvSap.Cantidad <> BI.PrimerConteo;");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>