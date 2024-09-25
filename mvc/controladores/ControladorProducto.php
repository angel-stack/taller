<?php
require_once 'modelos/ModeloProducto.php';

class ControladorProducto {

    public function crear() {
        require 'vistas/usuario/crear_producto.php';
    }

    public function guardar() {
        $producto = new ModeloProducto();
        $id_usuario = $_SESSION['user_id'];
        $producto->guardar($_POST['nombre'], $_POST['serial'], $id_usuario);
        header("Location: index.php?controlador=producto&accion=listar");
        exit();
    }

    public function eliminar($id) {
        $producto = new ModeloProducto();
        $producto->eliminar($id);
        header("Location: index.php?controlador=producto&accion=listar");
        exit();
    }
    
    public function listar() {
        $producto = new ModeloProducto();
        $id_usuario = $_SESSION['user_id'];
        $productos = $producto->listar($id_usuario);
        
        require_once 'vistas/usuario/listar_productos.php';
    }
}
?>
