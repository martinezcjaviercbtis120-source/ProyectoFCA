<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NoticiasController;
use App\Models\Noticia;

// Pagina principal de la FCA con las noticias
Route::get('/', [PrincipalController::class, 'inicio']);
Route::get('/noticias', [NoticiasController::class, 'noticias'])->name('noticias');

 Route::get('nuevanoticia', function(){
    $Noticia = new Noticia;
    $Noticia->titulo = "Nueva Noticia 6 test";
    $Noticia->descripcion = "Descripción de la nueva noticia que es un test 6";
    $Noticia->save();
    return $Noticia;
 });