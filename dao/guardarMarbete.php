<?php
include_once('db/db_Inventario.php');
$data = json_decode(file_get_contents('php://input'), true);

$nombre = $data['nombre'];
$comentarios = $data['comentarios'];
$folioMarbete = $data['folioMarbete'];
$storageUnits = $data['storageUnits'];

$con = new LocalConector();
$conex=$con->conectar();
$failedUnits = array();

$Object = new DateTime();
$Object->setTimezone(new DateTimeZone('America/Denver'));
$DateAndTime = $Object->format("Y/m/d h:i:s");

$stmt = $conex->prepare("INSERT INTO `Bitacora_Inventario`(`StorageUnit`, `FolioMarbete`, `Fecha`, `Usuario`, `Estatus`, `Conteo`) VALUES (?, ?, ?, ?, '1', '1')");

foreach ($storageUnits as $storageUnit) {
    $stmt->bind_param("ssss", $storageUnit, $folioMarbete, $DateAndTime, $nombre);
    if (!$stmt->execute()) {
        array_push($failedUnits, $storageUnit);
    }
}

if (count($failedUnits) > 0) {
    echo json_encode(["success" => false, "failedUnits" => $failedUnits]);
} else {
    echo json_encode(["success" => true]);
}

$stmt->close();
$conex->close();

?>