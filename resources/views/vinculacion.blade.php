@extends('layouts.principal')
 
@section('content')
    <div class="container-fluid p-0">
        <!-- IMAGEN PRINCIPAL -->
        <div class="mb-5">
            <img src="{{ asset('Imagenes/Vinculacion/' . $vinculacion->imagen_principal) }}" class="img-fluid w-100" style="max-height:650px; object-fit:contain; background:#f5f5f5; "alt="Vinculación">
        </div>
    </div>
 
    <div class="container pb-5">
        <!-- TITULO -->
        <div class="text-center mb-4">
            <h1 class="titulo-vinculacion">
                Coordinación de Vinculación Estratégica
            </h1>
        </div>
 
        <!-- TEXTO 1 -->
        <div class="mb-5">
            <p class="texto-vinculacion">
                {{$vinculacion->objetivo}}
            </p>
        </div>
 
        <!-- IMAGEN 2 -->
        <div class="mb-5">
            <img src="{{ asset('Imagenes/Vinculacion/' . $vinculacion->imagen_funciones)}}" class="img-fluid rounded shadow-sm w-100" style="height:420px; object-fit:cover; "alt="Funciones">
        </div>
 
        <!-- TEXTO 2 -->
        <div class="mb-5">
            <h2 class="subtitulo-vinculacion mb-4">
                Funciones de la Coordinación de Vinculación Estratégica
            </h2>
            <!-- El texto con saltos de linea se muestra correctamente gracias a la clase "texto-con-saltos" -->
            <p class="texto-vinculacion texto-con-saltos">
                  {{$vinculacion->funciones}}
            </p>
        </div>
 
        <!-- IMAGEN 3 -->
        <div class="mb-5">
            <img src="{{ asset('Imagenes/Vinculacion/' . $vinculacion->imagen_participacion) }}" class="img-fluid rounded shadow-sm w-100" style="height:420px; object-fit:cover; "alt="Participación">
        </div>
 
        <!-- TEXTO 3 -->
        <div class="mb-5">
            <h2 class="subtitulo-vinculacion mb-4">
                ¿Cómo puedes participar?
            </h2>
        <!-- El texto con saltos de linea se muestra correctamente gracias a la clase "texto-con-saltos" -->
            <p class="texto-vinculacion texto-con-saltos">
               {{$vinculacion->participacion}}
            </p>
        </div>
 
        <!-- CONTACTO -->
        <div class="text-center mt-5">
            <img src="{{ asset('Imagenes/Vinculacion/' . $vinculacion->imagen_contacto)}} "class="img-fluid rounded shadow" style="width:100%; max-width:500px; height:auto; object-fit:cover; "alt="Contacto">
        </div>
    </div>
    
<!-- Nuestros estilos -->
    <style>

        .titulo-vinculacion {
            color: #153e66;
            font-weight: 700;
            font-size: 2.3rem;
        }
 
        .subtitulo-vinculacion {
            color: #153e66;
            font-weight: 700;
            font-size: 1.8rem;
            text-align: center;
        }
 
        .texto-vinculacion {
            text-align: justify;
            line-height: 1.9;
            color: #5f6b7a;
            font-size: 1rem;
        }

        .texto-con-saltos {
            white-space: pre-line;
        }
</style>
@endsection