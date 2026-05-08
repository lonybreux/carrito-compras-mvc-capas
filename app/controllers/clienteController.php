<?php
require_once __DIR__ . '/../services/clienteService.php';

class ClienteController {
    
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function verPerfil() {
        require __DIR__ . '/../views/cliente/perfilView.php';
    }
}


?>