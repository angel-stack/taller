<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="index.php?controlador=usuario&accion=crear" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label for="cod">Código:</label>
        <input type="text" name="cod" required><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Crear Usuario">
    </form>
    <a href="index.php">Volver al Dashboard</a>
</body>
</html>
