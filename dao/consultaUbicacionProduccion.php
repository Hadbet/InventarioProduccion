<?php

include_once('db/db_Inventario.php');


$numeroParte = $_GET['numeroParte'];

ContadorApu($numeroParte);


function ContadorApu($numeroParte)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Ubicaciones` WHERE `GrammerNo` = '$numeroParte'");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>