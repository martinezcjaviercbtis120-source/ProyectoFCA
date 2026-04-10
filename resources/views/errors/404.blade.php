<!-- Ejemplo utilizado de la pagina de StackOverflow y magecomp.com -->
@extends('layouts.principal') 

@section('titulo', 'Error 404 - Página No Encontrada')

@section('content')
<div class="container text-center py-5 my-5">
    <h1 class="display-1 fw-bold" style="color: #0b3a63;">404</h1>
    <h2 class="mb-4">¡Uay! 404, Por aquí no hay nada</h2>
    <p class="lead mb-5">
        La dirección que ingresaste no existe. 
        Verifica la URL o regresa a la página principal de la Facultad.
    </p>
    <a href="{{ url('/') }}" class="btn btn-lg text-white" style="background: #0b3a63; border-radius: 0;">
        Regresar al Inicio
    </a>
</div>

{{-- Espaciador para que el footer no se pegue --}}
<div style="height: 100px;"></div>
@endsection