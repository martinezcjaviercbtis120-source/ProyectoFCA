@extends('layouts.principal') 

@section('Facultad de contaduría y Administración', 'Página de Inicio') 

@section('content') 

<!-- Carrusel de mi inicio -->
    <section class="container-fluid my-0 p-0">
        <x-carruselinicio/>
    </section>

<!-- Card de mis noticias -->
    <section class="container-fluid my-5">
        <x-cardnoticias
            titulo="Noticias" 
            idCarrusel="carruselnoticias" 
            :noticias="$noticias"/>

<!-- Card de mis eventos -->
    <section class="container-fluid">
    <x-cardeventos
        titulo="Eventos" 
        idCarrusel="carruselEventos"
        :eventos="$eventos"         
    />
    </section>
@endsection