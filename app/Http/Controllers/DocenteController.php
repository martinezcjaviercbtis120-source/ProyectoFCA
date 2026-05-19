<?php

namespace App\Http\Controllers;

use App\Models\Docente;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docentes()
    {
        // Obtener los docentes de la base de datos y paginarlos
        $docentes = Docente::paginate(10);
        return view('Docentes', compact('docentes'));
    }
}
