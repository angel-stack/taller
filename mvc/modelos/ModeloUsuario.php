<?php
class ModeloUsuario {
    
    public function autenticar($cod, $password) {
        global $conn;
        $query = $conn->prepare("SELECT * FROM usuario WHERE cod = :cod AND password = :password");
        $query->execute(['cod' => $cod, 'password' => $password]);
    
        $user = $query->fetch();
    
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['cod'] = $user['cod']; 
            header("Location: index.php?controlador=usuario&accion=dashboard");
            exit();
        } else {
            echo "Login incorrecto. Código: $cod, Password: $password";
        }
    }
    public function eliminar($id) {
        global $conn;
        $query = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $query->execute(['id' => $id]);
    }
    

    public function guardar($nombre, $cod, $password) {
        global $conn;
        $query = $conn->prepare("INSERT INTO usuarios (nombre, cod, password) VALUES (:nombre, :cod, :password)");
        $query->execute(['nombre' => $nombre, 'cod' => $cod, 'password' => $password]);
    }

    public function listar() {
        global $conn;
        $query = $conn->prepare("SELECT * FROM usuarios");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>