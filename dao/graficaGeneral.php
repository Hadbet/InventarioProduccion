<?php

include_once('db/db_Inventario.php');


//$marbete = $_GET['marbete'];

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT 
    A.`AreaNombre`,
    COUNT(CASE WHEN BI.`PrimerConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) AS 'PrimerConteoLiberado',
    COUNT(CASE WHEN BI.`PrimerConteo` = 0 AND BI.`Estatus` IN (0, 1) THEN 1 END) AS 'PrimerConteoNoLiberado',
    COUNT(CASE WHEN BI.`SegundoConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) AS 'SegundoConteoLiberado',
    COUNT(CASE WHEN BI.`SegundoConteo` = 0 AND BI.`Estatus` IN (0, 1) THEN 1 END) AS 'SegundoConteoNoLiberado',
    COUNT(CASE WHEN BI.`TercerConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) AS 'TercerConteoLiberado',
    COUNT(CASE WHEN BI.`TercerConteo` = 0 AND BI.`Estatus` IN (0, 1) THEN 1 END) AS 'TercerConteoNoLiberado',
    COUNT(BI.`PrimerConteo`) AS 'TotalPrimerConteo',
    COUNT(BI.`SegundoConteo`) AS 'TotalSegundoConteo',
    COUNT(BI.`TercerConteo`) AS 'TotalTercerConteo',
    (COUNT(CASE WHEN BI.`PrimerConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) / COUNT(BI.`PrimerConteo`)) * 100 AS 'PorcentajePrimerConteo',
    (COUNT(CASE WHEN BI.`SegundoConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) / COUNT(BI.`SegundoConteo`)) * 100 AS 'PorcentajeSegundoConteo',
    (COUNT(CASE WHEN BI.`TercerConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) / COUNT(BI.`TercerConteo`)) * 100 AS 'PorcentajeTercerConteo'
FROM 
    `Area` AS A
LEFT JOIN 
    `Bitacora_Inventario` AS BI ON A.`IdArea` = BI.`Area`
GROUP BY 
    A.`AreaNombre`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>