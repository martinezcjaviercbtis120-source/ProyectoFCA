@props(['eventos', 'titulo', 'idCarrusel'])

<div class="container-fluid mt-5">
    <!--Titulo que se trae de nuestra base de datos para el carrusel-->
    <h2 class="text-center mb-4" style="color: #153e66;">{{ $titulo }}</h2>
     <!--Carrusel de bootstrap-->
    <div id="{{ $idCarrusel }}" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
        <div class="carousel-inner">

            <!--El chunk nos sirve para agrupar de 4 en 4 nuestros cards-->
            @foreach ($eventos->chunk(4) as $grupo)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row g-4 px-5 justify-content-center">

                        @foreach ($grupo as $evento)
                            <div class="col-md-3">
                                <div class="card h-100 shadow-sm" style="border: none; border-bottom: 5px solid #c69214;">
                                    <!--Imagen del evento-->
                                    <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                         style="height: 200px; object-fit: cover;" class="card-img-top"
                                         alt="{{ $evento->titulo }}">
                                    <!--Datos del evento-->
                                    <div class="card-body d-flex flex-column text-center">
                                        <h5 class="card-title fw-bold">{{ $evento->titulo }}</h5>
                                        <p class="card-text small">{{ $evento->descripcion }}</p>

                                         <!-- Button trigger modal (Ejemplo de la pagina de getbootstrap.com) un modal x evento-->
                                        <button type="button" class="btn w-100 py-3 fw-bold" 
                                                style="background: #153e66; color: white; border: none;" 
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEvento{{ $evento->id }}">
                                            Ver más
                                        </button>

                                        <!-- Modal. Aqui el id del modal coincide con el el boton del evento --> 
                                        <div class="modal fade" id="modalEvento{{ $evento->id }}" tabindex="-1"
                                             aria-labelledby="labelEvento{{ $evento->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <!-- titulo de cada evento de la bd -->
                                                        <h5 class="modal-title fw-bold" id="labelEvento{{ $evento->id }}">
                                                            {{ $evento->titulo }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                       <!-- texto de cada evento de la bd -->
                                                        <p>{{ $evento->evento ?? $evento->evento }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!--Controles del carrusel para las cards-->
        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $idCarrusel }}" data-bs-slide="prev" style="width: 5%; filter: invert(1);">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#{{ $idCarrusel }}" data-bs-slide="next" style="width: 5%; filter: invert(1);">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>