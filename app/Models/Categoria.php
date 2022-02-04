<?php
namespace App\Models;

class User
{
    public $nombre;
    public $codigo;
    public $descripcion;
    public function _construct()
    {

    }
    public function mostrarInformacion()
    {
        echo $this->nombre. "<hr>";
        echo $this->codigo. "<hr>";
        echo $this->descripcion. "<hr>";
    }
}
