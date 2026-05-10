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

    public function findByIdCliente($id_cliente) {
        $stmt = $this->conn->prepare('SELECT * FROM pedido WHERE id_cliente=?');
        $stmt->bind_param('i',$id_cliente);
        $stmt->execute();

        $result = $stmt->get_result();

        $fila = $result->fetch_assoc();
        $stmt->close();

        return $fila;
    }
}


?>