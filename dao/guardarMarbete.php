<?php
include_once('db/db_Inventario.php');
$data = json_decode(file_get_contents('php://input'), true);

$nombre = $data['nombre'];
$comentarios = $data['comentarios'];
$folioMarbete = $data['folioMarbete'];
$storageUnits = $data['storageUnits'];

$con = new LocalConector();
$conex=$con->conectar();

$Object = new DateTime();
$Object->setTimezone(new DateTimeZone('America/Denver'));
$DateAndTime = $Object->format("Y/m/d h:i:s");

$stmt = $conex->prepare("INSERT INTO `Bitacora_Inventario`(`StorageUnit`, `FolioMarbete`, `Fecha`, `Usuario`, `Estatus`, `Conteo`) VALUES (?, ?, ?, ?, 'A', 'PRIMER CONTEO')");

foreach ($storageUnits as $storageUnit) {
    $stmt->bind_param("ssss", $storageUnit, $folioMarbete, $DateAndTime, $nombre);
    $stmt->execute();
}

$stmt->close();
$conex->close();

?>