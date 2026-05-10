<?php

class PedidoRepository {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function save($total,$id_cliente) {
        $stmt = $this->conn->prepare('INSERT INTO pedido (estado,total,id_cliente,fecha) VALUES (?,?,?,?)');

        $fechaActual = date('Y-m-d');
        $estado = 'enviado';

        $stmt->bind_param('siis',$estado,$total,$id_cliente,$fechaActual);
        $stmt->execute();
        $stmt->close();
    }
}


?>