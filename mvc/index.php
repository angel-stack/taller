<?php
require_once 'db.php';
session_start();

$controlador = isset($_GET['controlador']) ? $_GET['controlador'] : 'usuario';
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'login';

switch ($controlador) {
    case 'usuario':
        require_once 'controladores/ControladorUsuario.php';
        $controladorUsuario = new ControladorUsuario();
        if (method_exists($controladorUsuario, $accion)) {
            $controladorUsuario->{$accion}();
        } else {
            echo "Acción no encontrada.";
        }
        break;

    case 'producto':
        require_once 'controladores/ControladorProducto.php';
        $controladorProducto = new ControladorProducto();
        if (method_exists($controladorProducto, $accion)) {
            $controladorProducto->{$accion}();
        } else {
            echo "Acción no encontrada.";
        }
        break;

    default:
        echo "Controlador no encontrado.";
        break;
}
?>
