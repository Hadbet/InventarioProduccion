<?php
include_once('db/db_Inventario.php');

$comentario = $_POST['comentario'];
$ids = json_decode($_POST['ids']);

try {
    $con = new LocalConector();
    $conex=$con->conectar();

    foreach ($ids as $id) {
        $stmt = $conex->prepare("UPDATE `Bitacora_Inventario` SET `Estatus`='5',`Comentario`=? WHERE `FolioMarbete` = ?");
        $stmt->bind_param("si", $comentario, $id);

        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(["success" => true, "message" => "Update exitosa"]);
        } else {
            echo json_encode(["success" => false, "message" => "No se pudo insertar el registro UPDATE `Bitacora_Inventario` SET `Estatus`='5',`Comentario`=$comentario WHERE `Id_Bitacora` = $id"]);
        }
    }

    $stmt->close();
    $conex->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}

?>