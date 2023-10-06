<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Contacto</h2>
        <form action="guardar_contacto.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" required></textarea>
            </div>
            <input type="submit" value="Enviar Mensaje">
        </form>
    </div>
</body>
</html>
