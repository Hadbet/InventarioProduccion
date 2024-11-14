<?php

include_once('db/db_Inventario.php');

$storageUnit = $_GET['storageUnit'];
$bin = $_GET['bin'];

ContadorApu($storageUnit,$bin);

function ContadorApu($storageUnit,$bin)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Storage_Unit` WHERE `Id_StorageUnit` = '$storageUnit' and `Storage_Bin`='$bin'");

    if (mysqli_num_rows($datos) == 0) {
        echo json_encode(array("Estatus" => "No coincide el storage unit con el storage bin"));
        return;
    }

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    $datosBitacora = mysqli_query($conex, "SELECT * FROM `Storage_Unit` WHERE `Id_StorageUnit` = '$storageUnit' and `Estatus` = 0");

    if (mysqli_num_rows($datosBitacora) > 0) {
        echo json_encode(array("Estatus" => "Ya fue escaneado por otro usuario este storage unit"));
    } else {
        echo json_encode(array("data" => $resultado));
    }
}

?>