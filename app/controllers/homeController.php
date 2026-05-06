<?php

class HomeController {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        require __DIR__ . '/../views/home/homeView.php';
    }

}

?>