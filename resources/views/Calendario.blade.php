@extends('layouts.Principal')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="text-center mb-2">
            <h1 class="fw-bold" style="color: #0b3a63;">Calendario escolar</h1>
            <div class="mx-auto" style="width: 60px; height: 4px; background-color: #c69214;"></div>
        </div>
        <!-- Nuestra imagen sacada de la pagina de la facultad-->
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-lg-12">
                <div class="card shadow-sm border-0 p-2">
                    <img src="{{asset('Imagenes/Calendario/calendario.png')}}" class="img-fluid rounded" alt="Calendario Escolar UADY">
                </div>
            </div>
        </div>
        <!-- Titulo de los eventos en el calendario -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="mb-4 border-bottom pb-2 fw-bold" style="color: #0b3a63;">Próximos Eventos</h3>
                <!-- Listado de eventos extraidos de la base de datos -->
                <div class="list-group shadow-sm">
                    @foreach ($eventos as $evento)
                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="bi bi-calendar-check-fill me-3 fs-4" style="color: #0b3a63;"></i>
                            <span class="fw-medium text-dark">{{ $evento->evento }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
