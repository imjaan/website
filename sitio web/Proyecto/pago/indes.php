<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Compra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Compra</h2>
        <form action="guardar_compra.php" method="POST">

           <div class="form-group">
                <label for="metodo_pago">Método de Pago:</label>
                <select name="metodo_pago" id="metodo_pago" required>
                    <option value="Tarjeta">Tarjeta</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Yappy">Yappy</option>

                </select>
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="text" name="monto" id="monto" required>
            </div>
            <div class="form-group">
                <label for="fecha_pago">Fecha de Pago:</label>
                <input type="date" name="fecha_pago" id="fecha_pago" required>
            </div>
            <input type="submit" value="Guardar Compra">
        </form>
    </div>
</body>
</html>
