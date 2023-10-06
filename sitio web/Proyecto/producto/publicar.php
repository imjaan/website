<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$estado = $_POST['estado'];

$sql = "INSERT INTO producto (id_usuario, nombre, descripcion, precio, categoria, estado) VALUES ('$id_usuario', '$nombre', '$descripcion', '$precio', '$categoria', '$estado')";

if ($conn->query($sql) === TRUE) {
    echo "Publicación exitosa. Gracias por publicar tu producto.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>