<?php
require_once __DIR__ . '/../models/producto.php';

class InventarioRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function findAll() {
        $result = $this->conn->query('SELECT p.nombre, i.stock_actual
        FROM inventario i
        INNER JOIN producto p ON i.id_producto = p.id_producto
        ORDER BY i.id_producto');

        $filas = [];

        while($fila = $result->fetch_assoc()) {
            $filas[] = $fila;
        }

        return $filas;

    }

    public function findByIdProducto($id_producto) {
        $stmt = $this->conn->prepare('SELECT * FROM inventario WHERE id_producto = ?');
        $stmt->bind_param('i',$id_producto);
        $stmt->execute();
        $result = $stmt->get_result();
        $fila = $result->fetch_assoc();

        $stmt->close();

        return $fila;
    }

    public function incrementarStock(int $id_producto, int $cantidad) {
        $stmt = $this->conn->prepare('UPDATE inventario SET stock_actual = stock_actual + ? WHERE id_producto = ?');
        $stmt->bind_param('ii',$cantidad,$id_producto);
        $stmt->execute();
        $stmt->close();
    }

    public function decrementarStock(int $id_producto, int $cantidad) {
        $stmt = $this->conn->prepare('UPDATE inventario SET stock_actual = stock_actual - ? WHERE id_producto = ?');
        $stmt->bind_param('ii',$cantidad,$id_producto);
        $stmt->execute();
        $stmt->close();
    }
}


?>