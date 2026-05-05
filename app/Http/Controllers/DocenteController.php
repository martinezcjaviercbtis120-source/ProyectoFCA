<?php

namespace App\Http\Controllers;

use App\Models\Docente;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docentes()
    {
        // Obtener todos los docentes de la base de datos
        $docentes = Docente::paginate(5);
        return view('Docentes', compact('docentes'));
    }
}
