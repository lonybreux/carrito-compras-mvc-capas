<?php
require_once __DIR__ . '/../services/clienteService.php';

class ClienteController {
    
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        $clienteService = new ClienteService($this->conn);
        $filas = $clienteService->obtenerClientes();

        require __DIR__ . '/../views/cliente/clientesView.php';
    }

    public function verPerfil() {
        require __DIR__ . '/../views/cliente/perfilView.php';
    }
}


?>