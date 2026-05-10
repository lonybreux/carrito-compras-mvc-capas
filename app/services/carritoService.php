<?php
require_once __DIR__ . '/../repositories/carritoRepository.php';
require_once __DIR__ . '/../repositories/detalleCarritoRepository.php';
require_once __DIR__ . '/../repositories/productoRepository.php';
require_once __DIR__ . '/../repositories/pedidoRepository.php';
require_once __DIR__ . '/../repositories/envioRepository.php';
require_once __DIR__ . '/../repositories/pagoRepository.php';
require_once __DIR__ . '/../services/inventarioService.php';


class CarritoService {
    private $carritoRepository;
    private $detalleCarritoRepository;
    private $productoRepository;
    private $inventarioService;
    private $pedidoRepository;
    private $envioRepository;
    private $pagoRepository;

    public function __construct($conn) {
        $this->carritoRepository = new CarritoRepository($conn);
        $this->detalleCarritoRepository = new DetalleCarritoRepository($conn);
        $this->productoRepository = new ProductoRepository($conn);
        $this->inventarioService = new InventarioService($conn);
        $this->pedidoRepository = new PedidoRepository($conn);
        $this->envioRepository = new EnvioRepository($conn);
        $this->pagoRepository = new PagoRepository($conn);
    }

    public function obtenerGuardarCarrito(int $id_cliente) {
        $carrito = $this->carritoRepository->findByIdCliente($id_cliente);

        if($carrito === NULL) {
            $carrito = new Carrito(0,$id_cliente);
            $this->carritoRepository->save($carrito);
            $carrito = $this->carritoRepository->findByIdCliente($id_cliente);
        }

        return $carrito;
    }

    public function agregarProducto(int $id_cliente,int $id_producto, int $cantidad) {
        $carrito = $this->obtenerGuardarCarrito($id_cliente);
        $producto = $this->productoRepository->findById($id_producto);


        if($producto !== NULL) {
            $detalle = new DetalleCarrito($carrito->getID(),$id_producto,$cantidad);
            $this->detalleCarritoRepository->save($detalle);
            $this->inventarioService->actualizarInventario($id_producto,$cantidad);
        } 
        
    }

    public function eliminarProducto(int $id_cliente, int $id_producto) {
        $carrito = $this->obtenerGuardarCarrito($id_cliente);
        $detalle = $this->detalleCarritoRepository->findByIdCarritoProducto($carrito->getID(),$id_producto);
        
        
        $this->detalleCarritoRepository->delete($carrito->getID(),$id_producto);
        $this->inventarioService->devolverInventario($id_producto,$detalle['cantidad']);
        
    
    }

    public function verProductos(int $id_carrito) {
        $filas = $this->detalleCarritoRepository->findByIdCarrito($id_carrito);
        return $filas;
    }

    public function obtenerTotal(int $id_carrito) {
        $total = $this->detalleCarritoRepository->getTotal($id_carrito);
        return $total;
    }

    public function registrarPedido($total, $id_cliente) {
        $this->pedidoRepository->save($total,$id_cliente);
    }

    public function registrarEnvio($direccion, $id_pedido) {
        $this->envioRepository->save($direccion,$id_pedido);
    }

    public function registrarPago($monto,$metodo,$id_pedido) {
        $this->pagoRepository->save($monto,$metodo,$id_pedido);
    }

    public function obtenerPedido($id_cliente) {
        return $this->pedidoRepository->findByIdCliente($id_cliente);
    }
}
?>