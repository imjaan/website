<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Búsqueda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Formulario de Búsqueda</h2>
        <form action="buscar.php" method="POST">
            <div class="form-group">
                <label for="buscar">Buscar:</label>
                <input type="text" name="buscar" id="buscar" required>
            </div>
            <input type="submit" value="Buscar">
        </form>
    </div>
</body>

</html>