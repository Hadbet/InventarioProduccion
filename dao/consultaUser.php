<?php

include_once('db/db_Inventario.php');


//$marbete = $_GET['marbete'];

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT `Id_Usuario`, `User`, `Password`,
    CASE 
        WHEN `Rol` = 1 THEN 'Capturista'
        WHEN `Rol` = 2 THEN 'Auditor'
        WHEN `Rol` = 3 THEN 'Lider de conteo'
        ELSE 'Rol desconocido'
    END AS `Rol`,
    IF(`Estatus` = 1, 
        '<span class=\"badge badge-pill badge-success\">Activo</span>', 
        '<span class=\"badge badge-pill badge-info\">Inactivo</span>'
    ) AS `Estatus`,
    IF(`Estatus` = 1, 
        CONCAT('<button class=\"btn btn-danger text-white\" onclick=\"miFuncion1(', `Id_Usuario`, ')\">Desactivar</button>'), 
        CONCAT('<button class=\"btn btn-danger text-white\" onclick=\"miFuncion1(', `Id_Usuario`, ')\">Activar</button>')
    ) AS `Boton1`,
    CONCAT('<button class=\"btn btn-warning text-white\" onclick=\"miFuncion2(\'', `User`, '\', \'', `Password`, '\', ', `Rol`, ', ', `Estatus`, ')\">Actualizar</button>') AS `Boton2`
FROM `Usuarios` WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>