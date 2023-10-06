<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];

$sql = "INSERT INTO usuario (nombre, email, telefono, contraseña) VALUES ('$nombre', '$email', '$telefono', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. Gracias por registrarte.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
