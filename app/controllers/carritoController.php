<?php
require_once __DIR__ . '/../services/carritoService.php';


class CarritoController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function verCarrito() {
        $id_cliente = $_SESSION['id_cliente'];
        $carritoService = new CarritoService($this->conn);
        $carrito = $carritoService->obtenerGuardarCarrito($id_cliente);
        $filas = $carritoService->verProductos($carrito->getID());

        require __DIR__ . '/../views/carrito/carritoView.php';
    }

    public function agregarProducto() {

        $id_cliente = $_SESSION['id_cliente'];
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];

        $carritoService = new CarritoService($this->conn);
        $result = $carritoService->agregarProducto($id_cliente,$id_producto,$cantidad);

        $_SESSION['agregar'] = $result;

        header('Location: /proyecto-SO/public/index.php/perfil');
        exit();
    }

    public function eliminarProducto(){
        $id_cliente = $_SESSION['id_cliente'];
        $id_producto = $_POST['id_producto'];

        $carritoService = new CarritoService($this->conn);
        $carritoService->eliminarProducto($id_cliente,$id_producto);

        header('Location: /proyecto-SO/public/index.php/perfil/carrito');
        exit();
    }
}

?>