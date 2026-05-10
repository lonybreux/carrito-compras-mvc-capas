<?php

class PedidoController {
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function registrarPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $direccion = $_POST['direccion'];
            $metodoPago = $_POST['metodo_pago'];

            header('Location: proyecto-SO/public/index.php/pedido/exito');
            exit();
        }
    }
}



?>