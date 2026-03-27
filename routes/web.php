<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NoticiasController;
use App\Models\Noticia;
use App\Models\Evento;
use Symfony\Contracts\EventDispatcher\Event;

// Pagina principal de la FCA con las noticias
Route::get('/', [PrincipalController::class, 'inicio']);
Route::get('/', [NoticiasController::class, 'index']);


//Metodo que nos ayuda a crear una nueva noticia
 Route::get('nuevanoticia', function(){ 
    $Noticia = new Noticia;
    $Noticia->titulo = "Nueva Noticia 6 test";
    $Noticia->descripcion = "Descripción de la nueva noticia que es un test 6";
    $Noticia->save();
    return $Noticia;
 });

 //Metodo que nos ayuda a crear un nuevo evento
  Route::get('nuevoevento', function(){ 
    $Evento = new Evento;
    $Evento->titulo = "Nuevo Evento 5 test";
    $Evento->descripcion = "Descripción del nuevo evento que es un test 5";
    $Evento->save();
    return $Evento;
 });