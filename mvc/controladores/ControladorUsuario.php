<?php
require_once 'modelos/ModeloUsuario.php';

class ControladorUsuario {
    
    public function login() {
        require 'vistas/login_usuario.php';
    }

    public function autenticar() {
        $usuario = new ModeloUsuario();
        $usuario->autenticar($_POST['cod'], $_POST['password']);
    
        echo "Sesión iniciada: " . $_SESSION['user_id'] . " - " . $_SESSION['cod'];
        exit();
    }
    

    public function dashboard() {
        require 'vistas/dashboard_usuario.php';
    }

    public function eliminar($id) {
        $usuario = new ModeloUsuario();
        $usuario->eliminar($id);
        header("Location: index.php?controlador=usuario&accion=listar");
        exit();
    }
    

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $cod = $_POST['cod'];
            $password = $_POST['password'];

            $usuario = new ModeloUsuario();
            $usuario->guardar($nombre, $cod, $password);
            header("Location: index.php?controlador=usuario&accion=listar");
            exit();
        }

        require_once 'vistas/administrador/crear_usuario.php';
    }

    public function listar() {
        $usuario = new ModeloUsuario();
        $usuarios = $usuario->listar();

        require_once 'vistas/administrador/listar_usuarios.php';
    }
}
?>
