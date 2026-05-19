@extends('layouts.Principal')

@section('content')
    <div class="container py-5">

        <!-- TITULO -->
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color:#003B70; font-family:'Poppins', sans-serif;">
                Atención a Trabajadores
            </h1>
            <p class="text-secondary fs-5">
                Accesos directos a trámites, servicios y beneficios institucionales.
            </p>
            <div class="mx-auto" style="width:100px; height:5px; background:#C69214;border-radius:20px;"></div>
        </div>

        <!-- CARDS -->
        <div class="row g-4 justify-content-center">

            <!-- CARD 1 -->
            <div class="col-lg-3 col-md-6">
                <a href="/construccion" class="text-decoration-none">
                    <div class="card border-0 shadow-lg h-100 text-center p-4 personal-card">
                        <div class="mb-4">
                            <i class="bi bi-shield-check" style="font-size:3rem; color:#C69214;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color:#003B70;">Fondo de Ahorro para el Retiro (F.A.R.)</h4>
                        <p class="text-secondary">
                            Información y beneficios relacionados con el fondo de ahorro institucional.
                        </p>
                    </div>
                </a>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-3 col-md-6">
                <a href="/construccion" class="text-decoration-none">
                    <div class="card border-0 shadow-lg h-100 text-center p-4 personal-card">
                        <div class="mb-4">
                            <i class="bi bi-shield-check" style=" font-size:3rem; color:#C69214;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color:#003B70;">
                            Seguros
                        </h4>
                        <p class="text-secondary">
                            Consulta coberturas, pólizas y servicios disponibles para el personal.
                        </p>
                    </div>
                </a>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-3 col-md-6">
                <a href="/construccion" class="text-decoration-none">
                    <div class="card border-0 shadow-lg h-100 text-center p-4 personal-card">
                        <div class="mb-4">
                            <i class="bi bi-mortarboard-fill" style="font-size:3rem; color:#C69214;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color:#003B70;">
                            Formación
                        </h4>
                        <p class="text-secondary">
                            Programas y cursos para el desarrollo profesional y académico.
                        </p>
                    </div>
                </a>
            </div>

            <!-- CARD 4 -->
            <div class="col-lg-3 col-md-6">
                <a href="/construccion" class="text-decoration-none">
                    <div class="card border-0 shadow-lg h-100 text-center p-4 personal-card">
                        <div class="mb-4">
                            <i class="bi bi-file-earmark-text-fill" style="font-size:3rem; color:#C69214;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color:#003B70;">
                            Trámites
                        </h4>
                        <p class="text-secondary">
                            Acceso rápido a solicitudes, formatos y procesos administrativos.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <!-- ENLACES -->
        <div class="mt-5">
            <div class="card border-0 shadow-lg p-4 personal-card">
                <h4 class="fw-bold mb-4 text-center" style="color:#003B70;">
                    Otros Enlaces de Interés
                </h4>
                <div class="row text-center">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="/construccion" class="text-secondary text-decoration-none">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Correo Institucional
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="/construccion" class="text-secondary text-decoration-none">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Recibos de Nómina
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="/construccion" class="text-secondary text-decoration-none">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Directorio Telefónico
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="/construccion" class="text-secondary text-decoration-none">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Normatividad Universitaria
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background: #F4F6F9;
            font-family: 'Poppins', sans-serif;
        }

        .contacto-card {
            border-radius: 20px;
            transition: all .35s ease;
        }

        .contacto-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        }
    </style>
@endsection