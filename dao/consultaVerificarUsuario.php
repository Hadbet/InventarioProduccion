<?php
include_once('db/db_Inventario.php');

$user = $_POST['user'];
$password = $_POST['password']; // Recibimos la contraseña sin encriptar

try {
    $con = new LocalConector();
    $conex=$con->conectar();

    // Buscamos al usuario en la base de datos
    $stmt = $conex->prepare("SELECT `Password` FROM `Usuarios` WHERE `User` = ?");
    $stmt->bind_param("s", $user);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si el usuario existe, verificamos la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['Password'])) {
            echo json_encode(["success" => true, "message" => "Inicio de sesión exitoso"]);
        } else {
            echo json_encode(["success" => false, "message" => "Contraseña incorrecta"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Usuario no encontrado"]);
    }

    $stmt->close();
    $conex->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>