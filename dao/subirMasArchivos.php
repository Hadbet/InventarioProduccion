<?php

include_once('db/db_Facturas.php');

$con = new LocalConector();
$conex=$con->conectar();

$nombreInstructor = $_POST['nombreInstructor'];
$folio = $_POST['txtFolio'];
$nomina = $_POST['txtNomina'];
$nombre = $_POST['txtNombre'];
$factura = $_POST['txtFactura'];

$target_dir = "../documentacion/"; // especifica el directorio donde se subirá el archivo

$Object = new DateTime();
$Object->setTimezone(new DateTimeZone('America/Denver'));
$DateAndTime = $Object->format("Y/m/d H:i:s");

// verifica si el directorio existe, si no, lo crea
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// verifica si se subieron archivos
if (!empty($_FILES['archivos']['name'][0])) {
    // recorre cada archivo
    for ($i = 0; $i < count($_FILES['archivos']['name']); $i++) {
        $target_file = $target_dir . $folio . $nomina . '.' . strtolower(pathinfo($_FILES["archivos"]["name"][$i], PATHINFO_EXTENSION)); // especifica la ruta del archivo a subir

        // intenta subir el archivo
        if (move_uploaded_file($_FILES["archivos"]["tmp_name"][$i], $target_file)) {
            $insertDocumento= "INSERT INTO `Facturas`(`Folio`, `Documento`, `FechaRegistro`, `Usuario`, `Aprobacion`, `FacturaId`, `FolioWere`, `Estatus`, `FechaAprobacion`) VALUES ('$folio','$folio$nomina','$DateAndTime','$nombre','','$factura','',0,'')";
            $rsinsertDocu=mysqli_query($conex,$insertDocumento);
            echo "El archivo ". basename( $_FILES["archivos"]["name"][$i]). " ha sido subido.";
        } else {
            echo "Lo siento, hubo un error subiendo el archivo ". basename( $_FILES["archivos"]["name"][$i]). ".";
        }
    }
} else {
    echo "No se subieron archivos.";
}

mysqli_close($conex);
echo '<script type="text/javascript">
           window.location = "../form_registro.php"
      </script>';

?>