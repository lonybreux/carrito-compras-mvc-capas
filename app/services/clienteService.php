<?php
require_once __DIR__ . '/../repositories/clienteRepository.php';

class ClienteService {
    private $clienteRepository;

    public function __construct($conn) {
        $this->clienteRepository = new ClienteRepository($conn);
    }

    public function obtenerClientes() {
        return $this->clienteRepository->findAll();
    }

    public function registrarUsuario(Cliente $cliente) {

        $contrasenaHasheada = password_hash($cliente->getContrasena(),PASSWORD_BCRYPT);
        $cliente->setContrasena($contrasenaHasheada);
        $this->clienteRepository->save($cliente);
    }

    public function iniciarSesion($email, $contrasena) {
        $cliente = $this->clienteRepository->findByEmail($email);

        if($cliente === NULL) return NULL;

        if(!password_verify($contrasena,$cliente->getContrasena())) return NULL;

        return $cliente;
    }
}

?>