<?php

class Carrito {
    private int $id;
    private int $id_cliente;
    
    public function __construct(int $id, int $id_cliente) {
        $this->id = $id;
        $this->id_cliente = $id_cliente;
    }

    public function getID() {
        return $this->id;
    }

    public function getIDCliente() {
        return $this->id_cliente;
    }

    public function setID(int $id) {
        $this->id = $id;
    }
}



?>