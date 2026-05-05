<?php
require_once __DIR__ . '/../services/productoService.php';
require_once __DIR__ . '/../services/inventarioService.php';

class HomeController {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        require __DIR__ . '/../views/home/homeView.php';
    }

    public function verProductos() {
        $productoService = new ProductoService($this->conn);
        $filas = $productoService->obtenerProductos();

        require __DIR__ . '/../views/home/productosView.php';
    }

    public function verInventario() {
        $inventarioService = new InventarioService($this->conn);
        $filas = $inventarioService->obtenerInventario();

        require_once __DIR__ . '/../views/home/inventarioView.php';
    }

}

?>