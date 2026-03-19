<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    /**
     * Controlador de mis noticias
     */

    public function inicio(){
    $noticias["titulo"]="Noticias FCA";
    $noticias["imagen"]="logo.png";
    $noticias["descripcion"]="Descripción de la noticia";
    
    $noticia=new Noticia();
    $noticias["listadenoticias"]=$noticia->ObtenerListado();
    return view('principal', $noticias);
}

    public function update(Request $request) {
    $noticias=new Noticia();
    $respuesta=$noticias->BuscarId($request->id);
    if(!empty($respuesta)){
        $respuesta->titulo=$request->titulo;
        $respuesta->descripcion=$request->descripcion;
        $respuesta->save();
    }
    return $respuesta;
   }

}