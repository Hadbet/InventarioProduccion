<?php

include_once('db/db_Inventario.php');


ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM (
    SELECT 
        (SELECT SUM(Cantidad) FROM InventarioSap) AS TotalInventarioSap, 
        (SELECT SUM(PrimerConteo) FROM Bitacora_Inventario WHERE  Estatus = 1) AS TotalPrimerConteoBitacora, 
        (SELECT SUM(InventarioSap.Cantidad * (Parte.Costo / Parte.Por)) 
         FROM InventarioSap 
         INNER JOIN Parte ON InventarioSap.GrammerNo = Parte.GrammerNo) AS CostoTotalInventarioSap, 
        (SELECT SUM(Bitacora_Inventario.PrimerConteo * (Parte.Costo / Parte.Por)) 
         FROM Bitacora_Inventario 
         INNER JOIN Parte ON Bitacora_Inventario.NumeroParte = Parte.GrammerNo 
         WHERE Bitacora_Inventario.Estatus = 1) AS CostoTotalPrimerConteoBitacora
) AS Subquery
WHERE ABS(Subquery.CostoTotalInventarioSap - Subquery.CostoTotalPrimerConteoBitacora) >= 3000;");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>