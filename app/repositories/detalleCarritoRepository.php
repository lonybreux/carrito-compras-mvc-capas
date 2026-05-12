<?php
require_once __DIR__ . '/../models/detalleCarrito.php';

class DetalleCarritoRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function save(DetalleCarrito $detalleCarrito) {
        $stmt = $this->conn->prepare('INSERT INTO detalle_carrito (id_carrito,id_producto,cantidad) VALUES (?,?,?)
        ON DUPLICATE KEY UPDATE cantidad = cantidad + ?');
        $stmt->bind_param('iiii',$detalleCarrito->getIDCarrito(),$detalleCarrito->getIDProducto(),$detalleCarrito->getCantidad(),$detalleCarrito->getCantidad());
        $stmt->execute();
        $stmt->close();
    }

    public function findByIdCarrito(int $id_carrito) {
        $stmt = $this->conn->prepare('SELECT p.id_producto, p.nombre, p.precio, p.imagen, dc.cantidad
        FROM detalle_carrito dc
        INNER JOIN producto p ON dc.id_producto = p.id_producto
        WHERE dc.id_carrito=?
        ORDER BY p.id_producto');

        $stmt->bind_param('i',$id_carrito);
        $stmt->execute();

        $result = $stmt->get_result();
        
        $filas = [];

        while($fila = $result->fetch_assoc()) {
            $filas[] = $fila;
        }

        $stmt->close();

        return $filas;
    }

    public function findByIdCarritoProducto(int $id_carrito, int $id_producto) {
        $stmt = $this->conn->prepare('SELECT * from detalle_carrito WHERE id_carrito = ? AND id_producto = ?');
        $stmt->bind_param('ii',$id_carrito,$id_producto);
        $stmt->execute();

        $result = $stmt->get_result();
        var_dump($result);
        $fila = $result->fetch_assoc();

        $stmt->close();
        return $fila;
    }

    public function delete(int $id_carrito,int $id_producto) {
        $stmt = $this->conn->prepare('DELETE FROM detalle_carrito WHERE id_carrito = ? AND id_producto = ?');
        $stmt->bind_param('ii',$id_carrito,$id_producto);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteAll($id_carrito) {
        $stmt = $this->conn->prepare('DELETE FROM detalle_carrito where id_carrito = ?');
        $stmt->bind_param('i',$id_carrito);
        $stmt->execute();
        $stmt->close();
    }

    public function getTotal(int $id_carrito) {
        $stmt = $this->conn->prepare('SELECT SUM(p.precio * dc.cantidad) AS total 
        FROM detalle_carrito dc 
        INNER JOIN producto p ON dc.id_producto = p.id_producto 
        WHERE dc.id_carrito = ?');

        $stmt->bind_param('i',$id_carrito);
        $stmt->execute();

        $result = $stmt->get_result();
        $total = $result->fetch_assoc();

        $stmt->close();

        return $total['total'];
    }
}

?>