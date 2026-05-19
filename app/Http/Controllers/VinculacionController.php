<?php
 
namespace App\Http\Controllers;
 
use App\Models\Vinculacion;
 
class VinculacionController extends Controller
{
    public function Vinculacion()
    {   // Obtenemos el primer registro de la tabla vinculacion de la base de datos
        $vinculacion = Vinculacion::first();
        return view('vinculacion', compact('vinculacion'));
    }
}