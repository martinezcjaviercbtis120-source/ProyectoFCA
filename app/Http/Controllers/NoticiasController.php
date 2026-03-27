<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasController extends Controller
    {
       //Controladores de noticias y eventos

    public function index() {
        // Jalamos todas las noticias de la DB usando el Modelo
        $noticias = Noticia::all();
        $eventos = Evento::all();

        // Enviamos la variable 'noticias y eventos' a la vista principal
        return view('principal', compact('noticias', 'eventos'));
    }

}