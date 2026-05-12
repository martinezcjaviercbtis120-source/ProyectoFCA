@extends('layouts.principal')

@section('content')
    <div class="container py-4">

        <!-- Titulo -->
        <div class="text-center mt-1">
            <h1 class="fw-bold" style="color: #153e66;">Oferta Educativa</h1>
            <p class="text-muted fw-bold">Facultad de Contaduría y Administración</p>
        </div>

        <!-- Descripción -->
        <p>
            La Facultad de Contaduría y Administración ofrece 4 programas de licenciatura:
        </p>

        <ul>
            @foreach ($ofertas as $oferta)
                <li>{{ $oferta->licenciatura }}</li>
            @endforeach
        </ul>

        <p>
            Todas ellas alineadas al Modelo Educativo para la Formación Integral (MEFI) de la UADY.
        </p>
        <hr class="my-5">

        <!-- Licenciaturas -->
        @foreach ($ofertas as $oferta)
            <div class="mb-5">
                <h2 class="fw-bold" style="color: #000000;">{{ $oferta->licenciatura }}</h2>
                <p>{{ $oferta->descripcion_de_la_licenciatura }}</p>
        @endforeach
        <hr class="my-5">

        <!-- Coordinadores de Carrera -->
        <h2 class="text-center fw-bold mb-5" style="color: #153e66;">Coordinadores de Carrera</h2>
        <div class="row g-4">
            <div class="row mb-0">
                @foreach ($ofertas as $oferta)
                    <div class="col-md-5 col-lg-3">
                        <div class="card shadow h-100">
                            <img src="{{asset('imagenes/Coordinadores/' . $oferta->imagen)}}" class="card-img-top" alt="Coordinador {{ $oferta->coordinadores }}" style="height: 350px; object-fit: cover; object-position: center;">

                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold" style="color: #153e66;">
                                    {{ $oferta->coordinadores }}
                                </h5>
                                <p class="card-text mb-1">
                                    {{ $oferta->areacord }}
                                </p>
                                <p class="text-muted small">
                                    {{ $oferta->correo }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection