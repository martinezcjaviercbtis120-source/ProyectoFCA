<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;

class EgresadoController extends Controller
{
    public function egresados()
{
    // Obtener todos los egresados de la base de datos
    $egresados = Egresado::paginate(10);
    return view('Egresados', compact('egresados'));
}
}
