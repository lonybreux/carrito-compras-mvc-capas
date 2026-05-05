<?php

class DetalleCarrito {
    private int $id_carrito;
    private int $id_producto;
    private int $cantidad;

    public function __construct(int $id_carrito, int $id_producto, int $cantidad) {
        $this->id_carrito = $id_carrito;
        $this->id_producto = $id_producto;
        $this->cantidad = $cantidad;
    }

    public function getIDCarrito(){
        return $this->id_carrito;
    }

    public function getIDProducto() {
        return $this->id_producto;
    }

    public function getCantidad(){
        return $this->cantidad;
    }
}

?>