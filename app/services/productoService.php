<?php
require_once __DIR__ . '/../repositories/productoRepository.php';

class ProductoService {

    private $productoRepository;

    public function __construct($conn){
        
        $this->productoRepository = new ProductoRepository($conn);
    }

    public function obtenerProductos() {
        return $this->productoRepository->findAll();
    }
}

?>