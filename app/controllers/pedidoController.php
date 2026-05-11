<?php
require_once __DIR__ . '/../services/carritoService.php';

class PedidoController {
    private $conn;
    private $carritoService;

    public function __construct($conn){
        $this->conn = $conn;
        $this->carritoService = new CarritoService($conn);
    }

    public function registrarPedido() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $direccion = $_POST['direccion'];
            $metodoPago = $_POST['metodo_pago'];
            $id_cliente = $_SESSION['id_cliente'];
            $carrito = $this->carritoService->obtenerGuardarCarrito($id_cliente);
            $total = $this->carritoService->obtenerTotal($carrito->getId());


            $this->carritoService->registrarPedido($total,$id_cliente);
            $id_pedido = $this->carritoService->obtenerPedido($id_cliente);
            $this->carritoService->registrarPago($total,$metodoPago,$id_pedido['id_pedido']);
            $this->carritoService->registrarEnvio($direccion,$id_pedido);

            $this->carritoService->eliminarProductosCarrito($carrito->getId());

            header('Location: /proyecto-SO/public/index.php/pedido/exito');
            exit();
        }
    }

    public function exitoView() {
        $id_cliente = $_SESSION['id_cliente'];
        $id_pedido = $this->carritoService->obtenerPedido($id_cliente);
        require __DIR__ . '/../views/cliente/exitoView.php';
        return;
    }
}



?>