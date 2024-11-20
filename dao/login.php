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
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../inicio.php'>";
} else if ($statusLogin['status'] == 0) {
    echo "<script>alert('Ocurrio un error')</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../index.php'>";
}
?>