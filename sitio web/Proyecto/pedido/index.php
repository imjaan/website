<!DOCTYPE html>
<html>
<head>
  <title>Pedido</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Solicitud de Pedido</h1>

  <form method="POST" action="procesar_pedido.php">
    <label for="id_usuario">ID Usuario:</label>
    <input type="number" name="id_usuario" id="id_usuario" required><br><br>

    <label for="id_producto">ID Producto:</label>
    <input type="number" name="id_producto" id="id_producto" required><br><br>

    <label for="fecha_pedido">Fecha del Pedido:</label>
    <input type="date" name="fecha_pedido" id="fecha_pedido" required><br><br>

    <label for="precio_total">Precio Total:</label>
    <input type="number" name="precio_total" id="precio_total" required><br><br>

    <label for="comentarios">Comentarios:</label>
    <textarea name="comentarios" id="comentarios"></textarea><br><br>

    <input type="submit" value="Realizar Pedido">
  </form>

  <center>
    <br><br>
    <a href="https://paypal.me" class="paypal-button" target="_blank">Pagar con PayPal</a>  
  </center>
  
</body>
</html>
