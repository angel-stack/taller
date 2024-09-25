<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?controlador=usuario&accion=login");
    exit();
}

echo "Bienvenido al Inicio, " . $_SESSION['cod'];

echo "<br><a href='index.php?controlador=producto&accion=crear'>Crear Producto</a><br>";
echo "<a href='index.php?controlador=producto&accion=listar'>Listar Productos</a><br>";
echo "<a href='index.php?controlador=usuario&accion=crear'>Crear Usuario</a><br>";
echo "<a href='index.php?controlador=usuario&accion=listar'>Listar Usuarios</a><br>";

?>
<a href="index.php">Cerrar Sesión</a>