<!-- Ejemplo utilizado de la pagina de StackOverflow y magecomp.com -->
@extends('layouts.principal') 

@section('titulo', 'Pagina en Construcción')

@section('content')

<!-- Contenido personalizado para la página en construcción -->
<div class="container text-center">
    <div class="card maintenance-card shadow-lg p-5 mx-auto border-0">
        <div class="mb-4">
            <img src="{{ asset('Imagenes/Principal/construc.gif') }}" alt="Construccion" width="auto">
        </div>
<div class="container text-center">
    <h1 class="display-1 fw-bold" style="color: #0b3a63;">En mantenimiento</h1>
    <h2 class="mb-4">¡Lo sentimos! Esta página se encuentra en construcción</h2>
    <p class="lead mb-5">
       Por favor, regresa a la página principal de la Facultad.
    </p>
    <!-- Botón para regresar al inicio -->
    <a href="{{ url('/') }}" class="btn btn-lg text-white" style="background: #0b3a63; border-radius: 0;">
        Regresar al Inicio
    </a>
</div>

<!-- Espaciador para que el footer no se pegue --> 
<div style="height:auto;"></div>
@endsection