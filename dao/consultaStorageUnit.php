<?php

include_once('db/db_Inventario.php');

$storageUnit = $_GET['storageUnit'];

ContadorApu($storageUnit);

function ContadorApu($storageUnit)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Storage_Unit` WHERE `Id_StorageUnit` = '$storageUnit'");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    $datosBitacora = mysqli_query($conex, "SELECT * FROM `Bitacora_Inventario` WHERE `StorageUnit` = '$storageUnit'");

    if (mysqli_num_rows($datosBitacora) > 0) {
        echo json_encode(array("Estatus" => "Ya existe"));
    } else {
        echo json_encode(array("data" => $resultado));
    }
}

?>