<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EgresadoController;
use App\Models\Noticia;
use App\Models\Evento;
use App\Models\Alumno;
use App\Models\Docente;
use App\Models\Egresado;
use Symfony\Contracts\EventDispatcher\Event;

// Pagina principal de la FCA con las noticias
Route::get('/', [PrincipalController::class, 'inicio']);
Route::get('/', [NoticiasController::class, 'index']);

// Pagina que me va a redirigir a la comunidad de la FCA
Route::get('/comunidad', [ComunidadController::class, 'Comunidad']);

// Pagina que me va a redirigir a la pestaña de docentes
Route::get('/docentes', [DocenteController::class, 'Docentes']);

// Pagina que me va a redirigir a la pestaña de egresados
Route::get('/egresados', [EgresadoController::class, 'Egresados']);

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
    $Evento->evento = "Descripción del nuevo evento que es un test 5";
    $Evento->save();
    return $Evento;
 });

 // Pagina que me va a redirigir a la pestaña de oferta educativa
  Route::get('/oferta-educativa', function () {
    return view('oferta-educativa');
});

 // Pagina que me va a redirigir a la pestaña de estudiantes
  Route::get('/estudiantes', function () {
    return view('estudiantes');
});

//Pagina que nos va a redirigir a la pestaña de construccion
Route::get('/construccion', function () {
    return view('construccion');
});