<?php
require_once __DIR__ . '/../repositories/inventarioRepository.php';
require_once __DIR__ . '/../repositories/productoRepository.php';

class InventarioService {
    private $inventarioRepository;
    private $productoRepository;

    public function __construct($conn) {
        $this->inventarioRepository = new InventarioRepository($conn);
        $this->productoRepository = new ProductoRepository($conn);
    }

    public function obtenerInventario() {
        return $this->inventarioRepository->findAll();
    }

    public function actualizarInventario(int $id_producto, int $cantidad) {
        $this->inventarioRepository->decrementarStock($id_producto,$cantidad);
        $this->verificarEstado($id_producto);
    }

    public function devolverInventario(int $id_producto, int $cantidad) {
        $this->inventarioRepository->incrementarStock($id_producto,$cantidad);
        $this->verificarEstado($id_producto);
    }

    public function verificarEstado(int $id_producto) {
        $inventario = $this->inventarioRepository->findByIdProducto($id_producto);

        $estado = $inventario['stock_actual'] <= 0 ? 'agotado': 'disponible';

        $this->productoRepository->updateStockById($id_producto,$estado);
    }

}

?>