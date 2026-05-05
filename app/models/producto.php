<?php

class Producto {
    private int $id;
    private string $nombre;
    private float $precio;
    private string $estado;
    private int $id_marca;
    private int $id_categoria;

    public function __construct(int $id, string $nombre, float $precio, string $estado, int $id_marca, int $id_categoria) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->estado = $estado;
        $this->id_marca = $id_marca;
        $this->id_categoria = $id_categoria;
    }
}

?>