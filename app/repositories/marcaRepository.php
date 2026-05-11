<?php



class MarcaRepository {

    private $conn;
    
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function findAll() {
        $result = $this->conn->query('SELECT * from marca');

        $filas = [];

        while($fila = $result->fetch_assoc()) {
            $filas[] = $fila;
        }

        return $filas;
    }
}

?>