<?php
require_once __DIR__ . '/../models/cliente.php';
require_once __DIR__ . '/../services/clienteService.php';

class AuthController {
    
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        require __DIR__ . '/../views/auth/authIndexView.php';
    }

    public function registrar() {

       if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];

            $cliente = new Cliente(0,$nombre,$apellido,$email,$contrasena);

            $clienteService = new ClienteService($this->conn);
            $clienteService->registrarUsuario($cliente);

            header('Location: /proyecto-SO/public/index.php');
            exit();
       }

        require __DIR__ . '/../views/auth/registrarView.php';
    }

    public function iniciarSesion() {

        $flag = FALSE;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];
            
            $clienteService = new ClienteService($this->conn);
            $cliente = $clienteService->iniciarSesion($email,$contrasena);

            if($cliente !== NULL){
                $_SESSION['id_cliente'] = $cliente->getId();
                $_SESSION['nombre'] = $cliente->getNombre();
                $_SESSION['apellido'] = $cliente->getApellido();
                header('Location: /proyecto-SO/public/index.php/perfil');
                exit();
            }

            $_SESSION['flag'] = TRUE;
            header('Location: /proyecto-SO/public/index.php/auth/iniciar-sesion');
            exit();   
            

        }

        $flag = isset($_SESSION['flag']) ? $_SESSION['flag'] : FALSE;
        unset($_SESSION['flag']);
        require __DIR__. '/../views/auth/iniciarSesionView.php';
    }
}
?>