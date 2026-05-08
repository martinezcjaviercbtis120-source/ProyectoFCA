@props(['noticias', 'titulo', 'idCarrusel']) 

<div class="container-fluid py-5 bg-light">

    <!-- TITULO -->
    <div class="text-center mb-5">

        <h2 class="fw-bold" style="color:#153e66;">
            {{ $titulo }}
        </h2>

        <!-- LINEA -->
        <div class="mx-auto mt-2"
             style="
                width:120px;
                height:4px;
                background:#c69214;
                border-radius:10px;
             ">
        </div>

    </div>

    <!-- CARRUSEL -->
    <div id="{{ $idCarrusel }}"
         class="carousel slide position-relative"
         data-bs-ride="false">

        <div class="carousel-inner">

            <!-- AGRUPAR 2 EN 2 -->
            @foreach($noticias->chunk(2) as $grupo)

                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    <div class="row justify-content-center g-4 px-lg-5">

                        @foreach($grupo as $noticia)

                            <div class="col-lg-6">

                                <!-- CARD -->
                                <div class="card h-100 border-0 shadow-sm noticia-card overflow-hidden bg-white">

                                    <div class="row g-0 h-100">

                                        <!-- IMAGEN -->
                                        <div class="col-md-5 d-flex align-items-center justify-content-center bg-white">

                                            <img src="{{ asset('Imagenes/Noticias/'.$noticia->imagen) }}"
                                                 class="img-fluid w-100 p-3"
                                                 style="
                                                    object-fit: contain;
                                                    height: 380px;
                                                    max-height: 220px;
                                                 "
                                                 alt="{{ $noticia->titulo }}">

                                        </div>

                                        <!-- TEXTO -->
                                        <div class="col-md-7 bg-white">

                                            <div class="card-body d-flex flex-column justify-content-center h-100 p-3 text-center">

                                                <!-- TITULO -->
                                                <h4 class="card-title fw-bold mb-3"
                                                    style="
                                                        color:#153e66;
                                                        font-size:1.3rem;
                                                    ">

                                                    {{ $noticia->titulo }}

                                                </h4>

                                                <!-- LINEA -->
                                                <div class="mx-auto mb-3"
                                                     style="
                                                        width:70px;
                                                        height:4px;
                                                        background:#c69214;
                                                        border-radius:10px;
                                                     ">
                                                </div>

                                                <!-- DESCRIPCION -->
                                                <p class="card-text text-muted flex-grow-1 lh-lg">

                                                    {{ Str::limit($noticia->descripcion, 140) }}

                                                </p>

                                                <!-- BOTON -->
                                                <div class="mt-3">

                                                    <button type="button"
                                                            class="btn px-4 py-2 fw-bold"
                                                            style="
                                                                background:#153e66;
                                                                color:white;
                                                                border-radius:10px;
                                                            "
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modalNoticia{{ $noticia->id }}">

                                                        Ver noticia completa

                                                    </button>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- MODAL -->
                                <div class="modal fade"
                                     id="modalNoticia{{ $noticia->id }}"
                                     tabindex="-1"
                                     aria-labelledby="labelNoticia{{ $noticia->id }}"
                                     aria-hidden="true">

                                    <div class="modal-dialog modal-lg modal-dialog-centered">

                                        <div class="modal-content border-0">

                                            <!-- HEADER -->
                                            <div class="modal-header"
                                                 style="
                                                    background:#153e66;
                                                    color:white;
                                                 ">

                                                <h5 class="modal-title fw-bold"
                                                    id="labelNoticia{{ $noticia->id }}">

                                                    {{ $noticia->titulo }}

                                                </h5>

                                                <button type="button"
                                                        class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal">
                                                </button>

                                            </div>

                                            <!-- BODY -->
                                            <div class="modal-body p-4 text-center">

                                                <img src="{{ asset('Imagenes/Noticias/'.$noticia->imagen) }}"
                                                     class="img-fluid rounded shadow mb-4"
                                                     style="
                                                        max-height:280px;
                                                        width:auto;
                                                        object-fit:contain;
                                                     "
                                                     alt="{{ $noticia->titulo }}">

                                                <p class="text-center lh-lg fs-6 text-secondary">

                                                    {{ $noticia->noticia }}

                                                </p>

                                            </div>

                                            <!-- FOOTER -->
                                            <div class="modal-footer">

                                                <button type="button"
                                                        class="btn btn-secondary"
                                                        data-bs-dismiss="modal">

                                                    Cerrar

                                                </button>

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

        <!-- BOTON PREV -->
        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#{{ $idCarrusel }}"
                data-bs-slide="prev"
                style="
                    width:5%;
                    left:-25px;
                ">

            <span class="carousel-control-prev-icon 
                         bg-dark 
                         rounded-circle 
                         p-4 
                         shadow">
            </span>

        </button>

        <!-- BOTON NEXT -->
        <button class="carousel-control-next"
                type="button"
                data-bs-target="#{{ $idCarrusel }}"
                data-bs-slide="next"
                style="
                    width:5%;
                    right:-25px;
                ">

            <span class="carousel-control-next-icon 
                         bg-dark 
                         rounded-circle 
                         p-4 
                         shadow">
            </span>

        </button>

    </div>

</div>

<!-- ESTILOS -->
<style>

    .noticia-card{

        transition: all .3s ease;
        border-radius: 18px;
        border-bottom: 5px solid #c69214;

    }

    .noticia-card:hover{

        transform: translateY(-6px);

        box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;

    }

</style>