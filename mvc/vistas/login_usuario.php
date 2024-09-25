<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión Usuario</title>
</head>
<body>
    <h2>Iniciar Sesión Usuario</h2>
    <form method="POST" action="index.php?controlador=usuario&accion=autenticar">
        <label>Código:</label>
        <input type="text" name="cod" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
