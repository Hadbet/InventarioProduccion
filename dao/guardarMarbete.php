<?php
include_once('db/db_Inventario.php');
    $data = json_decode(file_get_contents('php://input'), true);

    $nombre = $data['nombre'];
    $comentarios = $data['comentarios'];
    $folioMarbete = $data['folioMarbete'];
    $storageUnits = $data['storageUnits'];

    $parts = explode('.', $folioMarbete);

    $marbete = $parts[0];
    $conteo = $parts[1];


    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $totalCantidad = 0;

    foreach ($storageUnits as $storageUnit => $details) {
        $numeroParte = $details['numeroParte'];
        $cantidad = $details['cantidad'];
        $totalCantidad += $cantidad;
    }

    $primerConteo = $conteo == 1 ? $totalCantidad : 0;
    $segundoConteo = $conteo == 2 ? $totalCantidad : 0;
    $tercerConteo = $conteo == 3 ? $totalCantidad : 0;
    echo json_encode(["success" => false, "message" => "data".$data.$nombre.$storageUnits.$numeroParte. $marbete. $DateAndTime]);


?>