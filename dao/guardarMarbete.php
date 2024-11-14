<?php
include_once('db/db_Inventario.php');
try {
    $data = json_decode(file_get_contents('php://input'), true);

    $nombre = $data['nombre'];
    $comentarios = $data['comentarios'];
    $folioMarbete = $data['folioMarbete'];
    $storageUnits = $data['storageUnits'];

    $parts = explode('.', $folioMarbete);

    $marbete = $parts[0];
    $conteo = $parts[1];

    $con = new LocalConector();
    $conex=$con->conectar();
    $failedUnits = array();

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $stmt = $conex->prepare("INSERT INTO `Bitacora_Inventario`(`NumeroParte`, `FolioMarbete`, `Fecha`, `Usuario`, `Estatus`, `PrimerConteo`, `SegundoConteo`, `TercerConteo`, `Comentario`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $totalCantidad = 0;
    foreach ($storageUnits as $idStorageUnit => $details) {
        $numeroParte = $details['numeroParte'];
        $cantidad = $details['cantidad'];
        $totalCantidad += $cantidad;
    }

    $primerConteo = $conteo == 1 ? $totalCantidad : 0;
    $segundoConteo = $conteo == 2 ? $totalCantidad : 0;
    $tercerConteo = $conteo == 3 ? $totalCantidad : 0;

    $stmt->bind_param("sssssssss", $numeroParte, $marbete, $DateAndTime, $nombre, $conteo, $primerConteo, $segundoConteo, $tercerConteo, $comentarios);

    if (!$stmt->execute()) {
        echo json_encode(["success" => false]);
        throw new Exception('Error al ejecutar la consulta');
    } else {
        // Actualizar el estatus de los Storage_Unit
        $stmt2 = $conex->prepare("UPDATE `Storage_Unit` SET `Estatus`='1' WHERE `Id_StorageUnit` = ?");
        foreach ($storageUnits as $storageUnit => $details) {
            $idStorageUnit = $details['idStorageUnit'];
            $stmt2->bind_param("s", $idStorageUnit);
            $stmt2->execute();
        }
        $stmt2->close();
        echo json_encode(["success" => true]);
    }

    $stmt->close();
    $conex->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}

?>