<?php

require 'consultaVerificarUsuario.php';

session_start();
$Nomina = $_POST['nomina'];
$Password = $_POST['password'];

$statusLogin = consultarUsuarioVerificacion($Nomina, $Password);

if ($statusLogin['status'] == 1) {
    $_SESSION['nominaCurso'] = $Nomina;
    $_SESSION['passwordCurso'] = $Password;
    $_SESSION['rol'] = $statusLogin['rol'];
    $_SESSION['area'] = $statusLogin['area'];
    if ($statusLogin['rol'] == 1){
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../form_registro.php'>";
    }
    if ($statusLogin['rol'] == 2){
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../verificacion.php'>";
    }
    if ($statusLogin['rol'] == 3){
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../control_conteo.php'>";
    }
    if ($statusLogin['rol'] == 4){
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../inicio.php'>";
    }
} else if ($statusLogin['status'] == 0) {
    echo "<script>alert('Contraseña incorrecta')</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../index.html'>";
}else if ($statusLogin['status'] == 2) {
    echo "<script>alert('Usuario no encontrado')</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../index.html'>";
}
?>