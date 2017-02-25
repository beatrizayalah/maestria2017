<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitiocontroller extends Controller
{

    public function index()
    {
      echo "Hola Mundo";
    }
    public function saludar(Request $request, $nombre)
    {
     echo "Hello " . $nombre;
    }
}
