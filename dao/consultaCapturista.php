<?php

include_once('db/db_Inventario.php');


//$marbete = $_GET['marbete'];

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT B.FolioMarbete, M.Numero_Parte, B.Fecha, B.Usuario FROM Bitacora_Inventario B JOIN Marbete_Inventario M ON B.FolioMarbete = M.Id_Marbete WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>