<?php

include_once('db/db_Facturas.php');

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdFactura`, `Folio`, CONCAT('<a target=\"_blank\" class=\"btn btn-primary\" href=\"documentacion/', `Documento`, '.pdf\">', 'Ver documento', '</a>') AS `DocumentoLink`, `FechaRegistro`, `Usuario`, `Aprobacion`, `FolioWere`, `FechaAprobacion`, `FacturaId`, `Comentarios`,
CASE 
    WHEN `Estatus` = 0 THEN '<span class=\"badge\" style=\"background-color: yellow; color: white;\">Pendiente</span>'
    WHEN `Estatus` = 1 THEN '<span class=\"badge\" style=\"background-color: green; color: white;\">Aprobado</span>'
    WHEN `Estatus` = 2 THEN '<span class=\"badge\" style=\"background-color: red; color: white;\">Rechazado</span>'
END AS `Estatus`
FROM `Facturas`");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>