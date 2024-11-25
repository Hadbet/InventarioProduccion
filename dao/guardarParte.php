<?php
include_once('db/db_Inventario.php');

$grammerNo = $_POST['grammerNo'];
$descripcion = $_POST['descripcion'];
$um = $_POST['um'];
$profit = $_POST['profit'];
$costo = $_POST['costo'];
$por = $_POST['por'];

try {
    $con = new LocalConector();
    $conex=$con->conectar();

    $stmt = $conex->prepare("UPDATE `Parte` SET `Descripcion`=?,`UM`=?,`ProfitCtr`=?,`Costo`=?,`Por`=? WHERE  `GrammerNo`=?");
    $stmt->bind_param("ssssss", $descripcion, $um, $profit, $costo,$por,$grammerNo);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => true, "message" => "Inserción exitosa"]);
    } else {
        echo json_encode(["success" => false, "message" => "No se pudo insertar el registro"]);
    }

    $stmt->close();
    $conex->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}

?>