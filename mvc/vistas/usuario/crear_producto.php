<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
    <h2>Crear Producto</h2>
    <form method="POST" action="index.php?controlador=producto&accion=guardar">
        <label>Nombre del Producto:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Serial:</label>
        <input type="text" name="serial" required>
        <br>
        <input type="submit" value="Crear Producto">
    </form>
</body>
</html>
<a href="index.php?controlador=usuario&accion=dashboard" class="btn">Regresar al Dashboard</a>