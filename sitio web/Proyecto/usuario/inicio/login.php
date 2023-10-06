<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE email = '$email' AND contraseña = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "Inicio de sesión exitoso. ¡Bienvenido!";
} else {
    echo "Credenciales inválidas. Por favor, inténtalo nuevamente.";
}

// Cerrar la conexión
$conn->close();
?>
