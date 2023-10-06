<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$buscar = $_POST['buscar'];

$sql = "SELECT * FROM producto WHERE nombre LIKE '%$buscar%'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Resultados de la Búsqueda:</h2>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<p>Nombre: " . $fila['nombre'] . "</p>";
        echo "<p>Descripción: " . $fila['descripcion'] . "</p>";
        echo "<p>Precio: " . $fila['precio'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>No se encontraron resultados.</p>";
}

$conn->close();
?>
