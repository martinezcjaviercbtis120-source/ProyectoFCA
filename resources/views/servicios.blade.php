@extends('layouts.principal')

@section('content')
    <div class="container py-5">

        <!-- Tutulo Principal -->
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color:#003B70; font-family:'Poppins', sans-serif;">
                Servicios en Línea
            </h1>

            <p class="text-secondary fs-5">
                Herramientas y plataformas digitales disponibles para la comunidad FCA - UADY
            </p>

            <!-- Linea decorativa -->
            <div class="mx-auto mt-3" style=" width:110px; height:5px; background:#C69214; border-radius:20px;">
            </div>
        </div>

        <!-- Servicios -->
        <div class="row g-4 justify-content-center">

            <!-- Card SICEI -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow servicio-card h-100 text-center p-4">
                    <div class="icono-servicio mx-auto mb-4">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        SICEI
                    </h4>

                    <p class="text-secondary lh-lg">
                        Consulta asignaturas, horarios, KARDEX
                        calificaciones y procesos académicos.
                    </p>
                </div>
            </div>

            <!-- Card Correo -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow servicio-card h-100 text-center p-4">
                    <div class="icono-servicio mx-auto mb-4">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        Correo Institucional
                    </h4>

                    <p class="text-secondary lh-lg">
                        Accede a herramientas digitales,
                        correo y servicios universitarios.
                    </p>
                </div>
            </div>

            <!-- Card UADY Virtual -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow servicio-card h-100 text-center p-4">
                    <div class="icono-servicio mx-auto mb-4">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>

                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        UADY Virtual
                        Educación Superior
                    </h4>

                    <p class="text-secondary lh-lg">
                        Consulta libros digitales, recursos académicos
                        y realiza carga de tareas.
                    </p>
                </div>
            </div>

            <!-- Card TEAMS -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow servicio-card h-100 text-center p-4">
                    <div class="icono-servicio mx-auto mb-4">
                        <i class="bi bi-laptop-fill"></i>
                    </div>

                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        TEAMS
                    </h4>

                    <p class="text-secondary lh-lg">
                        Espacios digitales para clases,
                        tareas y actividades académicas.
                    </p>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Estilos de las Cards -->
    <style>
        body {
            background: #F4F6F9;
            font-family: 'Poppins', sans-serif;
        }

        .servicio-card {
            border-radius: 22px;
            transition: all .35s ease;
            background: white;
        }

        .servicio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
            background: #EAF2FB;
        }

        .icono-servicio {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #003B70;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icono-servicio i {
            font-size: 2.5rem;
            color: #C69214;
        }
 </style>
@endsection
