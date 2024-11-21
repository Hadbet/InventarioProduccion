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
    COUNT(CASE WHEN BI.`PrimerConteo` > 0 THEN 1 END) AS 'TotalPrimerConteo',
    COUNT(CASE WHEN BI.`SegundoConteo` > 0 THEN 1 END) AS 'TotalSegundoConteo',
    COUNT(CASE WHEN BI.`TercerConteo` > 0 THEN 1 END) AS 'TotalTercerConteo',
    CASE WHEN COUNT(CASE WHEN BI.`PrimerConteo` > 0 THEN 1 END) > 0 THEN (COUNT(CASE WHEN BI.`PrimerConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) / COUNT(CASE WHEN BI.`PrimerConteo` > 0 THEN 1 END)) * 100 ELSE NULL END AS 'PorcentajePrimerConteo',
    CASE WHEN COUNT(CASE WHEN BI.`SegundoConteo` > 0 THEN 1 END) > 0 THEN (COUNT(CASE WHEN BI.`SegundoConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) / COUNT(CASE WHEN BI.`SegundoConteo` > 0 THEN 1 END)) * 100 ELSE NULL END AS 'PorcentajeSegundoConteo',
    CASE WHEN COUNT(CASE WHEN BI.`TercerConteo` > 0 THEN 1 END) > 0 THEN (COUNT(CASE WHEN BI.`TercerConteo` > 0 AND BI.`Estatus` = 1 THEN 1 END) / COUNT(CASE WHEN BI.`TercerConteo` > 0 THEN 1 END)) * 100 ELSE NULL END AS 'PorcentajeTercerConteo'
FROM 
    `Area` AS A
LEFT JOIN 
    `Bitacora_Inventario` AS BI ON A.`IdArea` = BI.`Area`
WHERE 
    A.`AreaNombre` <> 'Mesa Central'
GROUP BY 
    A.`AreaNombre`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>