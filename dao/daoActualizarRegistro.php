<?php

include_once('db/db_Facturas.php');

$con = new LocalConector();
$conex=$con->conectar();

$aprobacion = $_POST['aprobacion'];
$folio = $_POST['folio'];
$id = $_POST['id'];
$comentarios = $_POST['comentarios'];
$bandera = $_POST['banderaAux'];

$target_dir = "../documentacion/"; // especifica el directorio donde se subirá el archivo

$Object = new DateTime();
$Object->setTimezone(new DateTimeZone('America/Denver'));
$DateAndTime = $Object->format("Y/m/d H:i:s");

if ($bandera == '1'){
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

// verifica si se subieron archivos
    if (!empty($_FILES['archivos']['name'][0])) {
        // recorre cada archivo
        for ($i = 0; $i < count($_FILES['archivos']['name']); $i++) {
            $target_file = $target_dir . $folio . '.' . strtolower(pathinfo($_FILES["archivos"]["name"][$i], PATHINFO_EXTENSION)); // especifica la ruta del archivo a subir

            // intenta subir el archivo
            if (move_uploaded_file($_FILES["archivos"]["tmp_name"][$i], $target_file)) {
                $insertDocumento= "UPDATE `Facturas` SET `Aprobacion`='$aprobacion',`DocumentoWere`='$folio',`FolioWere`='$folio',`Estatus`='1',`FechaAprobacion`='$DateAndTime' WHERE `IdFactura` = '$id'";
                $rsinsertDocu=mysqli_query($conex,$insertDocumento);
                echo "El archivo ". basename( $_FILES["archivos"]["name"][$i]). " ha sido subido.";
            } else {
                echo "Lo siento, hubo un error subiendo el archivo ". basename( $_FILES["archivos"]["name"][$i]). ".";
            }
        }
    } else {
        echo "No se subieron archivos.";
    }
}else{
    $insertDocumento= "UPDATE `Facturas` SET `Aprobacion`='$aprobacion',`Estatus`='2',`FechaAprobacion`='$DateAndTime', `Comentarios` = '$comentarios' WHERE `IdFactura` = '$id'";
    $rsinsertDocu=mysqli_query($conex,$insertDocumento);
}
// verifica si el directorio existe, si no, lo crea


mysqli_close($conex);
echo '<script type="text/javascript">
           window.location = "../form_registro.php"
      </script>';

?>