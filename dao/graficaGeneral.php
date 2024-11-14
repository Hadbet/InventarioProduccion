<?php

include_once('db/db_Inventario.php');


//$marbete = $_GET['marbete'];

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT 
    A.IdArea, 
    A.AreaNombre, 
    A.AreaProduccion, 
    A.StLocation, 
    A.StBin,
    (SELECT COUNT(*) FROM Marbete_Inventario M WHERE M.Area = A.IdArea AND M.Estatus = 1) AS Liberados,
    (SELECT COUNT(*) FROM Marbete_Inventario M WHERE M.Area = A.IdArea) AS Total,
    (SELECT COUNT(*) FROM Marbete_Inventario M WHERE M.Area = A.IdArea AND M.Estatus = 1) * 100.0 / (SELECT COUNT(*) FROM Marbete_Inventario M WHERE M.Area = A.IdArea) AS PorcentajeLiberados
FROM 
    Area A
WHERE 
    1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>