<?php
require_once __DIR__ . '/../models/cliente.php';

class ClienteRepository {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function save(Cliente $cliente) {
        $stmt = $this->conn->prepare('INSERT INTO cliente (nombre,apellido,email,contrasena) VALUES (?,?,?,?)');

        $stmt->bind_param('ssss',$cliente->getNombre(),$cliente->getApellido(),$cliente->getEmail(),$cliente->getContrasena());

        $stmt->execute();
        $stmt->close();
    }

    public function findAll() {
        $result = $this->conn->query('SELECT * FROM cliente');

        $filas = [];

        while($fila = $result->fetch_assoc()) {
            $filas[] = $fila;
        }

        return $filas;
    }

    public function findByEmail($email) {
        $stmt = $this->conn->prepare('SELECT * FROM cliente WHERE email=?');

        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $fila  = $result->fetch_assoc();

        $stmt->close();

        if(!$fila) return NULL;
        return new Cliente($fila['id_cliente'],$fila['nombre'],$fila['apellido'],$fila['email'],$fila['contrasena']);
    }



}

?>