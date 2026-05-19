<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Padrino;
 
class EstudiantesController extends Controller
{
    public function estudiantes()
    {   // Obtener todos los datos de padrino de la base de datos
        $padrinos = Padrino::all();
        return view('Estudiantes', compact('padrinos'));
    }
}
