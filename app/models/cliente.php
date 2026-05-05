<?php

class Cliente {
    private int $id;
    private string $nombre;
    private string $apellido;
    private string $email;
    private string $contrasena;

    public function __construct(int $id, string $nombre, string $apellido, string $email, string $contrasena) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    public function getID(){
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

}

?>