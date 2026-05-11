<?php

class EnvioRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function save($direccion,$id_pedido) {
        $stmt = $this->conn->prepare('INSERT INTO envio (fecha_entrega,estado,direccion,id_pedido) VALUES (?,?,?,?)');

        $fecha_entrega = date('Y-m-d',strtotime('+7 days'));
        $estado = 'en espera';

        $stmt->bind_param('sssi',$fecha_entrega,$estado,$direccion,$id_pedido);
        $stmt->execute();
        $stmt->close();
    }
}




?>