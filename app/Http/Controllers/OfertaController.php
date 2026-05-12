<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
class OfertaController extends Controller
{
    public function oferta()
    {
        // Obtener todas los ofertas de la base de datos
        $ofertas = Oferta::all();
        return view('oferta-educativa', compact('ofertas'));
    }
      
}
