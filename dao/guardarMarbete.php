<?php
include_once('db/db_Inventario.php');
try {
    $nombre = $_POST['nombre'];
    $comentarios = $_POST['comentarios'];
    $folioMarbete = $_POST['folioMarbete'];
    $storageUnits = json_decode($_POST['storageUnits'], true);

    $parts = explode('.', $folioMarbete);

    $marbete = $parts[0];
    $conteo = $parts[1];

    $con = new LocalConector();
    $conex=$con->conectar();
    $failedUnits = array();

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $stmt = $conex->prepare("UPDATE `Bitacora_Inventario` SET `Fecha`=?, `Usuario`=?, `Estatus`='1', `PrimerConteo`=?, `SegundoConteo`=?, `TercerConteo`=?, `Comentario`=? WHERE `FolioMarbete`=?");

    $totalCantidad = 0;

    foreach ($storageUnits as $storageUnit => $details) {
        $numeroParte = $details['numeroParte'];
        $cantidad = $details['cantidad'];
        $totalCantidad += $cantidad;
    }

    $primerConteo = $conteo == 1 ? $totalCantidad : 0;
    $segundoConteo = $conteo == 2 ? $totalCantidad : 0;
    $tercerConteo = $conteo == 3 ? $totalCantidad : 0;

    $stmt->bind_param("sssssss", $DateAndTime, $nombre, $primerConteo, $segundoConteo, $tercerConteo, $comentarios, $marbete);
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
    echo json_encode(["success" => false, "message" => $e->getMessage().$nombre.$storageUnits.$numeroParte. $marbete. $DateAndTime]);
}

?>