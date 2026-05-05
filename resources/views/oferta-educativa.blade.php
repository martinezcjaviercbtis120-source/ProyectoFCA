@extends('layouts.principal')

@section('content')

<div class="container py-5">

    <!-- Titulo -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Oferta Educativa</h1>
        <p class="text-muted">Facultad de Contaduría y Administración</p>
    </div>

    <!-- Descripción -->
    <p>
        La Facultad de Contaduría y Administración ofrece cuatro programas de licenciatura:
    </p>

    <ul>
        <li>Licenciatura de Contador Público</li>
        <li>Licenciatura en Mercadotecnia y Negocios Internacionales</li>
        <li>Licenciatura en Administración de Tecnologías de Información</li>
        <li>Licenciatura en Administración</li>
    </ul>

    <p>
        Todas ellas alineadas al Modelo Educativo para la Formación Integral (MEFI) de la UADY.
    </p>

    <hr class="my-5">

    <!-- Licenciaturas -->
    <h3 class="fw-bold">Licenciatura de Contador Público</h3>
    <p>
        Forma profesionistas capaces de generar información financiera, auditar procesos
        y apoyar en la toma de decisiones dentro de organizaciones.
    </p>

    <h3 class="fw-bold mt-4">Licenciatura en Mercadotecnia y Negocios Internacionales</h3>
    <p>
        Forma profesionales innovadores capaces de detectar oportunidades de mercado
        y crear estrategias en entornos globales.
    </p>

    <h3 class="fw-bold mt-4">Licenciatura en Administración de Tecnologías de Información</h3>
    <p>
        Forma especialistas en soluciones tecnológicas, desarrollo de sistemas y gestión de TI.
    </p>

    <h3 class="fw-bold mt-4">Licenciatura en Administración</h3>
    <p>
        Forma líderes capaces de dirigir organizaciones, gestionar recursos y mejorar la competitividad.
    </p>

    <hr class="my-5">

    <h2 class="text-center fw-bold mb-5">Coordinadores de Carrera</h2>

    <div class="row g-4">

        <!-- Aqui comienzan nuestras cards. Card 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Mtro. Carlos Méndez</h5>
                    <p class="card-text">Coordinador de Contador Público</p>
                    <p class="text-muted">carlos.mendez@uady.mx</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Dra. Ana López</h5>
                    <p class="card-text">Coordinadora de Mercadotecnia</p>
                    <p class="text-muted">ana.lopez@uady.mx</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Ing. Luis Herrera</h5>
                    <p class="card-text">Coordinador de TI</p>
                    <p class="text-muted">luis.herrera@uady.mx</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow h-100">
                <img src="https://via.placeholder.com/300x200" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Mtra. Sofía Ramírez</h5>
                    <p class="card-text">Coordinadora de Administración</p>
                    <p class="text-muted">sofia.ramirez@uady.mx</p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection