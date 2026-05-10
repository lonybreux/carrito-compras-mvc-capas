<?php

class PagoRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function save($monto,$metodo,$id_pedido) {

        $stmt = $this->conn->prepare('INSERT INTO pago (monto,metodo,id_pedido) VALUES (?,?,?)');

        $stmt->bind_param('isi',$monto,$metodo,$id_pedido);
        $stmt->execute();
        $stmt->close();
    }
}

?>