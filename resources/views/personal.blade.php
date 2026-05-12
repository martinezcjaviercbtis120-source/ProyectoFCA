@extends('layouts.Principal')

@section('content')


<div class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold" style="color: #0b3a63;">Atención a Trabajadores</h1>
        <div class="mx-auto" style="width: 80px; height: 4px; background-color: #c69214;"></div>
        <p class="text-muted mt-3">Accesos directos a trámites, servicios y beneficios institucionales.</p>
    </div>

    <div class="row g-4 justify-content-center">
        
        <div class="col-6 col-md-4 col-lg-3">
            <a href="/construccion" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-people-fill fs-1" style="color: #0b3a63;"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Fondo de Ahorro para el Retiro (F.A.R.)</h5>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <a href="/construccion" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-shield-check fs-1" style="color: #0b3a63;"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Seguros</h5>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <a href="/construccion" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-mortarboard-fill fs-1" style="color: #0b3a63;"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Formación</h5>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <a href="/construccion" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-file-earmark-text-fill fs-1" style="color: #0b3a63;"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Trámites</h5>
                </div>
            </a>
        </div>

    </div>

    <div class="mt-5 p-4 rounded shadow-sm bg-light">
        <h4 class="fw-bold mb-4" style="color: #0b3a63;">Otros Enlaces de Interés</h4>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/construccion" class="text-secondary"><i class="bi bi-chevron-right me-2"></i>Correo Institucional</a></li>
                    <li class="mb-2"><a href="/construccion" class="text-secondary"><i class="bi bi-chevron-right me-2"></i>Recibos de Nómina</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/construccion" class="text-secondary"><i class="bi bi-chevron-right me-2"></i>Directorio Telefónico</a></li>
                    <li class="mb-2"><a href="/construccion" class="text-secondary"><i class="bi bi-chevron-right me-2"></i>Normatividad Universitaria</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection