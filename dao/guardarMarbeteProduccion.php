<?php
include_once('db/db_Inventario.php');
try {
    $nombre = $_POST['nombre'];
    $numeroParte = $_POST['numeroParte'];
    $cantidad = $_POST['cantidad'];
    $storageBin = $_POST['storageBin'];
    $comentarios = $_POST['comentarios'];
    $folioMarbete = $_POST['folioMarbete'];

    $parts = explode('.', $folioMarbete);

    $marbete = $parts[0];
    $conteo = $parts[1];

    $con = new LocalConector();
    $conex=$con->conectar();

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");


    $stmt = $conex->prepare("UPDATE `Bitacora_Inventario` SET `Fecha`=?, `Usuario`=?, `Estatus`='1', `PrimerConteo`=?, `SegundoConteo`=?, `TercerConteo`=?, `Comentario`=?, `NumeroParte`=?, `StorageBin`=? WHERE `FolioMarbete`=?");

    // Dependiendo del valor de conteo, asignamos la cantidad a la columna correspondiente
    $primerConteo = $conteo == 1 ? $cantidad : null;
    $segundoConteo = $conteo == 2 ? $cantidad : null;
    $tercerConteo = $conteo == 3 ? $cantidad : null;

    $stmt->bind_param("sssssssss", $DateAndTime, $nombre, $primerConteo, $segundoConteo, $tercerConteo, $comentarios,$numeroParte,$storageBin, $marbete);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => true, "message" => "Actualización exitosa"]);
    } else {
        echo json_encode(["success" => false, "message" => "No se pudo actualizar el registro"]);
    }

    $stmt->close();
    $conex->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}

?>