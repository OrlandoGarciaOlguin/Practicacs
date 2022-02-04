<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerramientaControler extends Controller
{
    public function index()
    {
        return view('herramienta.index');
    }
    public function saludar()
    {
        echo "Hola mundo desde un controlador";
    }
}
