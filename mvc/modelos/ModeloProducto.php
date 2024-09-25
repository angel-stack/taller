<?php
class ModeloProducto {

    public function guardar($nombre, $serial, $id_usuario) {
        global $conn;
    
        $query = $conn->prepare("INSERT INTO producto_test (nombre, serial, id_usuario) VALUES (:nombre, :serial, :id_usuario)");
        $query->execute(['nombre' => $nombre, 'serial' => $serial, 'id_usuario' => $id_usuario]);
    }
    public function eliminar($id) {
        global $conn;
        $query = $conn->prepare("DELETE FROM productos WHERE id = :id");
        $query->execute(['id' => $id]);
    }
    
    
    public function listar($id_usuario) {
        global $conn;
        
        $query = $conn->prepare("SELECT * FROM producto_test WHERE id_usuario = :id_usuario");
        $query->execute(['id_usuario' => $id_usuario]);
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>
