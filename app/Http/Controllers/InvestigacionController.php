<?php
 
namespace App\Http\Controllers;
 
use App\Models\Investigacion;
 
class InvestigacionController extends Controller
{
public function Investigacion()
{   // Obtenemos el primer registro de la tabla investigacion de la base de datos
    $investigacion = Investigacion::first();
    return view('investigacion', compact('investigacion'));
}
}