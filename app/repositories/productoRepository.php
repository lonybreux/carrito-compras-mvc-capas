<?php
require_once __DIR__ . '/../models/producto.php';

class ProductoRepository {
    
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function findById(int $id_producto) {
        $stmt = $this->conn->prepare('SELECT * FROM producto WHERE id_producto=?');
        $stmt->bind_param('i',$id_producto);
        $stmt->execute();

        $result = $stmt->get_result();
        $fila = $result->fetch_assoc();

        if(!$fila) return NULL;
        return new Producto($fila['id_producto'],$fila['nombre'],$fila['precio'],$fila['estado'],$fila['id_marca'],$fila['id_categoria']);
    }

    public function findAll() {
        $result = $this->conn->query('SELECT p.id_producto, p.nombre, p.precio, p.estado, m.nombre AS marca, c.nombre AS categoria
        FROM producto p
        INNER JOIN marca m ON p.id_marca = m.id_marca
        INNER JOIN categoria c ON p.id_categoria = c.id_categoria
        ORDER BY p.id_producto');
        

        $filas = [];

        while($fila = $result->fetch_assoc()) {
            $filas[] = $fila;
        }

        return $filas;
    }

    public function updateStockById($id_producto,$estado){
        $stmt = $this->conn->prepare('UPDATE producto set estado = ? WHERE id_producto = ?');
        $stmt->bind_param('si', $estado, $id_producto);
        $stmt->execute();
        $stmt->close();
    }
}



?>