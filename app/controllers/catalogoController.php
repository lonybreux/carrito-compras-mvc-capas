<?php
require_once __DIR__ . '/../services/productoService.php';

class CatalogoController {
    private $conn;
    private $productoService;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->productoService = new ProductoService($conn);
    }

    public function index() {

        $productos = $this->verProductos();
        $marcas = $this->verMarcas();

        require_once __DIR__ . '/../views/home/catalogoView.php';
    }

    public function verProductos() {
        $productos = $this->productoService->obtenerProductos();

        return $productos;
    }

    public function verMarcas() {
        $marcas = $this->productoService->obtenerMarcas();

        return $marcas;
    }

}


?>