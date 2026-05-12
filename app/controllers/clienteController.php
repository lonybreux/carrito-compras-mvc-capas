<?php
require_once __DIR__ . '/../services/clienteService.php';
require_once __DIR__ . '/../services/productoService.php';
require_once __DIR__ . '/../services/carritoService.php';


class ClienteController {
    
    private $conn;
    private $productoService;
    private $carritoService;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->productoService = new ProductoService($conn);
        $this->carritoService = new CarritoService($conn);
    }

    public function verPerfil() {
        $carrito = $this->carritoService->obtenerGuardarCarrito($_SESSION['id_cliente']);
        $productos = $this->carritoService->verProductos($carrito->getID());
        $total = $this->carritoService->obtenerTotal($carrito->getID());
        $todosProductos = $this->productoService->obtenerProductos();
        require __DIR__ . '/../views/cliente/perfilView.php';
    }

    public function actualizar() {

        if($_SERVER['REQUEST_METHOD'] !== 'POST') return;

        $method = $_POST['_method'] ?? 'POST';

        if($method === 'DELETE') {
            $id_producto = intval($_POST['id_producto']);

            $this->carritoService->eliminarProducto($_SESSION['id_cliente'],$id_producto);

            
        } else {
            $id = $_POST['id'];
            $cantidad = $_POST['cantidad'];

            $this->carritoService->agregarProducto($_SESSION['id_cliente'],$id,$cantidad);
        }

        header('Location: /proyecto-SO/public/index.php/profile');
        exit();
       
    }

    public function pedido() {
        require __DIR__ . '/../views/cliente/pedidoView.php';
    }

}


?>