<?php
require_once __DIR__ . '/../models/carrito.php';
require_once __DIR__ . '/../models/producto.php';

class CarritoRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function save(Carrito $carrito) {
        $stmt = $this->conn->prepare('INSERT INTO carrito (id_cliente) VALUES(?)');

        $stmt->bind_param('i',$carrito->getIDCliente());
        $stmt->execute();
        $carrito->setID($this->conn->insert_id);
        $stmt->close();
    }

    public function findByIdCliente(int $idCliente) {
        $stmt = $this->conn->prepare('SELECT * FROM carrito WHERE id_cliente=?');

        $stmt->bind_param('i',$idCliente);
        $stmt->execute();

        $result = $stmt->get_result();
        $fila = $result->fetch_assoc();

        if(!$fila) return NULL;

        return new Carrito($fila['id_carrito'],$fila['id_cliente']);
    }
}

?>