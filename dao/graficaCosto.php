<?php

include_once('db/db_Inventario.php');


//$marbete = $_GET['marbete'];

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT A.AreaNombre, SUM(T.TotalContado) AS TotalContado, SUM(T.TotalEsperado) AS TotalEsperado FROM ( SELECT Area, COALESCE(SUM(COALESCE(NULLIF(TercerConteo, 0), NULLIF(SegundoConteo, 0), PrimerConteo)) * (P.Costo / P.Por), 0) AS TotalContado, 0 AS TotalEsperado FROM Bitacora_Inventario B LEFT JOIN Parte P ON B.NumeroParte = P.GrammerNo WHERE Estatus = 1 GROUP BY Area UNION ALL SELECT AreaCve AS Area, 0 AS TotalContado, COALESCE(SUM(Cantidad * (P.Costo / P.Por)), 0) AS TotalEsperado FROM InventarioSap I LEFT JOIN Parte P ON I.GrammerNo = P.GrammerNo GROUP BY AreaCve ) AS T JOIN Area A ON T.Area = A.IdArea GROUP BY A.AreaNombre;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>