<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunidadController extends Controller

{
    public function Comunidad(){
        //return bienvenido a la pagina principal;
        return view('Comunidad');
    }
}