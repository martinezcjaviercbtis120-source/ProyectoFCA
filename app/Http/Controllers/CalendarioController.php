<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Calendario;

class CalendarioController extends Controller
{
    public function calendario()
    {
        // Obtener todos los eventos del calendario de la base de datos
        $eventos = Calendario::all();
        return view('Calendario', compact('eventos'));
    }
}
