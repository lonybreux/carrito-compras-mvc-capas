<?php

class CatalogoController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        require_once __DIR__ . '/../views/home/catalogoView.php';
    }

}


?>