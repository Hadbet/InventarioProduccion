<?php

include_once('db/db_Inventario.php');

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT 
    SUM(
        CASE 
            WHEN ISap.Cantidad > COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            ) THEN ISap.Cantidad - COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            )
            ELSE 0
        END
    ) AS 'Cantidad_Total_Negativa',
    SUM(
        CASE 
            WHEN ISap.Cantidad < COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            ) THEN COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            ) - ISap.Cantidad
            ELSE 0
        END
    ) AS 'Cantidad_Total_Positiva',
    SUM(
        CASE 
            WHEN ISap.Cantidad > COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            ) THEN (ISap.Cantidad - COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            )) * (Parte.Por / Parte.Costo)
            ELSE 0
        END
    ) AS 'Costo_Total_Negativo',
    SUM(
        CASE 
            WHEN ISap.Cantidad < COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            ) THEN (COALESCE( 
                CASE WHEN BInv.TercerConteo != 0 THEN BInv.TercerConteo END, 
                CASE WHEN BInv.SegundoConteo != 0 THEN BInv.SegundoConteo END, 
                BInv.PrimerConteo 
            ) - ISap.Cantidad) * (Parte.Por / Parte.Costo)
            ELSE 0
        END
    ) AS 'Costo_Total_Positivo'
FROM 
    InventarioSap ISap
JOIN 
    Bitacora_Inventario BInv ON ISap.GrammerNo = BInv.NumeroParte AND ISap.STBin = BInv.StorageBin
JOIN 
    Parte ON ISap.GrammerNo = Parte.GrammerNo;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>