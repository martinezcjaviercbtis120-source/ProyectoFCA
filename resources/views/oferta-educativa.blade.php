@extends('layouts.principal')

@section('content')
    <div class="container py-4">

        <div class="container py-3">

            <div class="text-center mb-5">
                <h1 class="fw-bold" style="color: #153e66;">Oferta Educativa</h1>
                <p class="text-muted fw-bold">Facultad de Contaduría y Administración</p>
                <div class="mx-auto mt-2" style="width:100px; height:4px; background:#c69214; border-radius:10px;"></div>
            </div>

            <div class="mb-5 p-3 bg-white shadow-sm rounded border-start border-4" style="border-color: #153e66 !important;">
                <p class="mb-0 text-secondary">
                    La Facultad de Contaduría y Administración ofrece 4 programas de licenciatura, todas ellas alineadas al
                    <strong>Modelo Educativo para la Formación Integral (MEFI)</strong> de la UADY.
                </p>
            </div>
            <!-- nuestras cards de licenciaturas -->
            <div class="row g-4">
                @foreach ($ofertas as $oferta)
                    <div class="col-12 mb-4">
                        <!-- Cards de licenciaturas -->
                        <div class="card h-100 border-0 shadow-sm overflow-hidden bg-white">
                            <!-- Alineamiento de las cards -->
                            <div class="row g-0 align-items-center">
                                <!-- Imagen de cada licenciatura dependiendo del id que tenga en la base de datos -->
                                <div class="col-12 col-md-4 bg-light" style="height: 220px; overflow: hidden;">
                                    @if ($oferta->id == 1)
                                        <img src="{{ asset('Imagenes/Oferta/conta.jpg') }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;">
                                    @elseif($oferta->id == 2)
                                        <img src="{{ asset('Imagenes/Oferta/market.jpg') }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;">
                                    @elseif($oferta->id == 3)
                                        <img src="{{ asset('Imagenes/Oferta/lati.jpg') }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;">
                                    @else
                                        <img src="{{ asset('Imagenes/Oferta/admin.jpg') }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;">
                                    @endif
                                </div>
                                <!-- Informacion de cada licenciatura extraida desde la base de datos -->
                                <div class="col-12 col-md-8">
                                    <div class="card-body p-4">
                                        <h3 class="fw-bold mb-2" style="color: #153e66;">
                                            {{ $oferta->licenciatura }}
                                        </h3>
                                        <!-- linea decorativa de la card-->
                                        <div class="mb-3"
                                            style="width: 50px; height: 3px; background: #c69214; border-radius: 10px;">
                                        </div>
                                        <!-- descripcion de cada licenciatura -->
                                        <p class="text-secondary lh-lg mb-0" style="text-align: justify;">
                                            {{ $oferta->descripcion_de_la_licenciatura }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Coordinadores de Carrera -->
        <h2 class="text-center fw-bold mb-5" style="color: #153e66;">Coordinadores de Carrera</h2>
        <div class="row g-4 justify-content-center"> <!-- Las cards centradas -->
            @foreach ($ofertas as $oferta)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow border-0 h-100">
                        <div class="bg-light w-100" style="height: 250px; overflow: hidden;">
                            <img src="{{asset('imagenes/Coordinadores/' . $oferta->imagen)}}" class="w-100 h-100"
                                style="object-fit: cover; object-position: top;" alt="{{$oferta->coordinadores}}">
                        </div>

                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold" style="color: #153e66;">
                                    {{$oferta->coordinadores}}
                                </h5>
                                <p class="card-text text-secondary small mb-1">
                                    {{$oferta->areacord}}
                                </p>
                            </div>
                            <p class="text-muted small mb-0 mt-2">
                                {{$oferta->correo}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection