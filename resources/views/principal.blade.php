@extends('layouts.principal') 

@section('Facultad de contaduría y Administración', 'Página de Inicio') 

@section('content') 

<!-- Carrusel de mi inicio -->
    <section class="container-fluid my-0 p-0">
        <x-carruselinicio/>
    </section>

<!--Apartado de quienes somos-->
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold text-center"  style="color: #153e66;">¿Quiénes Somos?</h2>
                <p>
                    Fundada en 1922 por Felipe Carrillo Puerto, la Universidad Autónoma de Yucatán (UADY) es una institución de excelencia con más de un siglo de trayectoria. Desde la obtención de su autonomía en 1984, ha evolucionado en cinco campus especializados que albergan a más de 26 mil estudiantes. Hoy, destaca por su alto compromiso con la formación integral y la calidad educativa, contando con programas certificados nacionalmente que impulsan el desarrollo social y económico de la región.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('/Imagenes/Principal/bannersomos.jpg')}}" alt="Quiénes Somos" style="object-fit: none; height: 350px; width: 100%;">
            </div>
        </div>
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