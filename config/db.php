<?php

class ConexionBaseDatos {
    private static $conn = null;

    private function __construct(){}

    public static function getInstance() {
        if(self::$conn === null) {
            require_once __DIR__ . '/env.php';

            self::$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        }

        return self::$conn;
    }   
}

?>