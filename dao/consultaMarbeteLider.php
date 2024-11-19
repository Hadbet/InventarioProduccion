<?php

include_once('db/db_Inventario.php');


$area = $_GET['area'];

ContadorApu($area);

function ContadorApu($area)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT 
    `Id_Bitacora`, 
    `NumeroParte`, 
    `FolioMarbete`, 
    `Fecha`, 
    `Usuario`,
    IF(`Estatus` = 1, 
        '<span class=\"badge badge-pill badge-success\">Liberado</span>', 
        IF(`Estatus` = 5, 
            '<span class=\"badge badge-pill badge-warning\">Cancelado</span>', 
            '<span class=\"badge badge-pill badge-danger\">Pendiente</span>'
        )
    ) AS `Estatus`,
    `PrimerConteo`, 
    `SegundoConteo`, 
    `TercerConteo`, 
    `Comentario`, 
    `StorageBin`, 
    `StorageType`, 
    `Area`,
    IF(`SegundoConteo` = 0 AND `Estatus` = 1, 
        CONCAT('<button class=\"btn btn-danger text-white\" onclick=\"cancelar(', `Id_Bitacora`, ')\">Cancelar</button>'), 
        ''
    ) AS `Cancelar`
FROM 
    `Bitacora_Inventario` 
WHERE `Area` = $area AND `Estatus` = 1; ");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>