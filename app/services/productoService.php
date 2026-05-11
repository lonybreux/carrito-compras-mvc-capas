<?php
require_once __DIR__ . '/../repositories/productoRepository.php';
require_once __DIR__ . '/../repositories/marcaRepository.php';

class ProductoService {

    private $productoRepository;
    private $marcaRepository;

    public function __construct($conn){
        
        $this->productoRepository = new ProductoRepository($conn);
        $this->marcaRepository = new MarcaRepository($conn);
    }

    public function obtenerProductos() {
        return $this->productoRepository->findAll();
    }

    public function obtenerMarcas() {
        return $this->marcaRepository->findAll();
    }
}

?>