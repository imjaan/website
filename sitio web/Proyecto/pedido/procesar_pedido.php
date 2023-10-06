<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$id_usuario = $_POST['id_usuario'];
$id_producto = $_POST['id_producto'];
$fecha_pedido = $_POST['fecha_pedido'];
$precio_total = $_POST['precio_total'];
$comentarios = $_POST['comentarios'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO pedido (id_usuario, id_producto, fecha_pedido, precio_total, comentarios) VALUES ('$id_usuario', '$id_producto', '$fecha_pedido', '$precio_total', '$comentarios')";

if ($conn->query($sql) === TRUE) {
  echo "Pedido realizado exitosamente.";
} else {
  echo "Error al realizar el pedido: " . $conn->error;
}

$conn->close();
?>
