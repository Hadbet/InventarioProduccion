<?php
include_once('db/db_Inventario.php');

try {
    $nombre = $_POST['nombre'];
    $numeroParte = $_POST['numeroParte'];
    $cantidad = $_POST['cantidad'];
    $folioMarbete = $_POST['folioMarbete'];

    $parts = explode('.', $folioMarbete);
    $conteo = $parts[1];
    $marbete = $parts[0];

    $con = new LocalConector();
    $conex=$con->conectar();

    // Dependiendo del valor de conteo, asignamos la cantidad a la columna correspondiente
    if ($conteo == 1) {
        $stmt = $conex->prepare("UPDATE `Bitacora_Inventario` SET  `UsuarioVerificacion`=?, `Estatus`='1', `PrimerConteo`=? WHERE `FolioMarbete`=? AND `Estatus` = 2");
    } elseif ($conteo == 2) {
        $stmt = $conex->prepare("UPDATE `Bitacora_Inventario` SET  `UsuarioVerificacion`=?, `Estatus`='1', `SegundoConteo`=? WHERE `FolioMarbete`=? AND `Estatus` = 2");
    } elseif ($conteo == 3) {
        $stmt = $conex->prepare("UPDATE `Bitacora_Inventario` SET  `UsuarioVerificacion`=?, `Estatus`='1', `TercerConteo`=? WHERE `FolioMarbete`=? AND `Estatus` = 2");
    }

    $stmt->bind_param("sss", $nombre, $cantidad, $marbete);

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