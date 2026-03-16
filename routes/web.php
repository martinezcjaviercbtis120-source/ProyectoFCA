<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

// Pagina principal de la FCA
Route::get('/', [PrincipalController::class, 'inicio']);
