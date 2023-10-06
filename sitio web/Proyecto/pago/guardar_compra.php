<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$metodo_pago = $_POST['metodo_pago'];
$monto = $_POST['monto'];
$fecha_pago = $_POST['fecha_pago'];

$sql = "INSERT INTO pago (metodo_pago, monto, fecha_pago) VALUES ('$metodo_pago', '$monto', '$fecha_pago')";

if ($conn->query($sql) === TRUE) {
    echo "Compra guardada correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
