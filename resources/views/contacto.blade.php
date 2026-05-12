@extends('layouts.Principal')

@section('content')
    <div class="container py-5">

        <!-- Titulo Principal -->
        <div class="text-center mb-5">
            <h1 class="fw-bold"style="color:#003B70; font-family:'Poppins', sans-serif;">
                Contacto FCA - UADY
            </h1>

            <p class="text-secondary fs-5">
                Facultad de Contaduría y Administración
            </p>

            <div class="mx-auto" style="width:100px; height:5px; background:#C69214; border-radius:20px;"></div>
        </div>

        <!-- Inicia la info -->
        <div class="row g-4 justify-content-center">

            <!-- Card direccion -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 text-center p-4 contacto-card">
                    <div class="mb-4">
                        <i class="bi bi-geo-alt-fill" style="font-size:3rem; color:#C69214;"></i>
                    </div>

                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        Dirección
                    </h4>

                    <p class="text-secondary">
                        Campus de ciencias sociales,
                        Gran San Pedro Cholul,
                        97305 Mérida, Yuc., Mexico
                        Mérida (Yucatán), 97305
                    </p>
                </div>
            </div>

            <!-- Card telefono -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 text-center p-4 contacto-card">
                    <div class="mb-4">
                        <i class="bi bi-telephone-fill"style="font-size:3rem;color:#C69214;"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        Teléfono
                        <h4>
                            <p class="text-secondary">
                                999 981 0926
                                999 942 0604
                            </p>
                </div>
            </div>

            <!-- Card correo -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 text-center p-4 contacto-card">
                    <div class="mb-4">
                        <i class="bi bi-envelope-fill" style="font-size:3rem; color:#C69214;"></i>
                    </div>

                    <h4 class="fw-bold mb-3" style="color:#003B70;">
                        Correo Electrónico
                        <h4>
                            <p class="text-secondary">
                                fca@correo.uady.mx
                            <p>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos cards -->
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
