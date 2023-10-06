<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Registrar Productos</h2>
        <form action="publicar.php" method="POST">

            <div class="form-group">
                <label for="id_usuario">ID Usuario:</label>
                <input type="number" name="id_usuario" id="id_usuario" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select name="categoria" id="categoria" required>
                    <option value="Ropa">Ropa</option>
                    <option value="Calzado">Calzado</option>
                    <option value="Hogar">Hogar</option>
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Materiales">Materiales</option>
                    <option value="Prendas">Prendas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="radio" name="estado" id="estado_nuevo" value="Nuevo" checked> <label for="estado_nuevo">Nuevo</label>
                <input type="radio" name="estado" id="estado_usado" value="Usado"> <label for="estado_usado">Usado</label>
            </div>
            <input type="submit" value="Publicar">
        </form>
    </div>
</body>
</html>
