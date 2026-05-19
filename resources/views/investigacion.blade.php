@extends('layouts.principal')
 
@section('content')
 
<div class="container py-5">
    <!-- TITULO -->
    <div class="text-center mb-5">
        <h1 class="titulo-investigacion">
            {{ $investigacion->titulo }}
        </h1>
    </div>
 
    <!-- Texto Principal -->
    <div class="mb-5">
        <p class="texto-investigacion">
            {{$investigacion->descripcion}}
        </p>
    </div>
 
    <!-- Imagenes -->
    <div class="row g-4 mb-5">
        @for ($i = 1; $i <= 6; $i++)
            @php
                $imagen = 'imagen'.$i;
            @endphp

            @if($investigacion->$imagen)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="{{ asset('Imagenes/Investigacion/'.$investigacion->$imagen)}}"
                             class="img-fluid w-100" style="height:250px; object-fit:cover; "alt="Investigación">
                    </div>
                </div>
            @endif
        @endfor
    </div>
 
    <!-- Texto Secundario -->
    <div class="mb-5">
        <div class="mb-4">
            <h2 class="subtitulo-investigacion">
                Cuerpos Académicos
            </h2>
        </div>
        <p class="texto-investigacion">
            {{$investigacion->texto_final}}
        </p>
    </div>
</div>
 
<!-- Los estilos de la vista -->
<style>
  
    .titulo-investigacion{
        color:#153e66;
        font-weight:700;
        text-align:center;
        font-size:2.2rem;
    }
 
    .subtitulo-investigacion{
        color:#153e66;
        font-weight:700;
        text-align:center;
        font-size:1.8rem;
    }
 
    .texto-investigacion{
        text-align:justify;
        line-height:1.9;
        color:#5f6b7a;
        font-size:1rem;
    }
</style>
@endsection