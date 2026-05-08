@props(['eventos', 'titulo'])

<div class="container py-5">

    <!-- TITULO -->
    <div class="text-center mb-5">

        <h2 class="fw-bold" style="color:#153e66;">
            {{ $titulo }}
        </h2>

        <div class="mx-auto mt-2"
             style="
                width:120px;
                height:4px;
                background:#c69214;
                border-radius:10px;
             ">
        </div>

    </div>

    <!-- EVENTOS -->
    <div class="row gy-5">

        @foreach ($eventos as $evento)

            <div class="col-12">

                <!-- CARD -->
                <div class="card border-0 shadow-lg overflow-hidden evento-card">

                    <div class="row g-0 align-items-center">

                        <!-- IMAGEN -->
                        <div class="col-lg-6">

                            <img src="{{ asset('Imagenes/Eventos/'.$evento->imagen) }}"
                                 class="img-fluid w-100"
                                 style="
                                    height:500px;
                                    object-fit:cover;
                                 "
                                 alt="{{ $evento->titulo }}">

                        </div>

                        <!-- CONTENIDO -->
                        <div class="col-lg-6 bg-white">

                            <div class="card-body p-5 d-flex flex-column justify-content-center h-100 text-center">

                                <!-- BADGE -->
                                <span class="badge align-self-center mb-3 px-4 py-2"
                                      style="
                                        background:#153e66;
                                        font-size:.9rem;
                                      ">

                                    Próximo Evento

                                </span>

                                <!-- TITULO -->
                                <h2 class="fw-bold mb-4"
                                    style="
                                        color:#153e66;
                                        font-size:2rem;
                                    ">

                                    {{ $evento->titulo }}

                                </h2>

                                <!-- LINEA -->
                                <div class="mx-auto mb-4"
                                     style="
                                        width:80px;
                                        height:4px;
                                        background:#c69214;
                                        border-radius:10px;
                                     ">
                                </div>

                                <!-- DESCRIPCION -->
                                <p class="text-muted fs-5 lh-lg">

                                    {{ Str::limit($evento->descripcion, 220) }}

                                </p>

                                <!-- BOTON -->
                                <div class="mt-4">

                                    <button type="button"
                                            class="btn px-5 py-3 fw-bold"
                                            style="
                                                background:#153e66;
                                                color:white;
                                                border-radius:10px;
                                            "
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalEvento{{ $evento->id }}">

                                        Ver evento completo

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- MODAL -->
                <div class="modal fade"
                     id="modalEvento{{ $evento->id }}"
                     tabindex="-1"
                     aria-labelledby="labelEvento{{ $evento->id }}"
                     aria-hidden="true">

                    <div class="modal-dialog modal-xl modal-dialog-centered">

                        <div class="modal-content border-0">

                            <!-- HEADER -->
                            <div class="modal-header"
                                 style="
                                    background:#153e66;
                                    color:white;
                                 ">

                                <h5 class="modal-title fw-bold"
                                    id="labelEvento{{ $evento->id }}">

                                    {{ $evento->titulo }}

                                </h5>

                                <button type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal">
                                </button>

                            </div>

                            <!-- BODY -->
                            <div class="modal-body p-5 text-center">

                                <img src="{{ asset('Imagenes/Eventos/'.$evento->imagen) }}">
                                     class="img-fluid rounded shadow mb-4"
                                     style="
                                        max-height:500px;
                                        object-fit:contain;
                                     "
                                     alt="{{ $evento->titulo }}">

                                <p class="fs-5 lh-lg text-secondary">

                                    {{ $evento->evento }}

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

<!-- ESTILOS -->
<style>

    .evento-card{

        border-radius: 25px;
        transition: all .35s ease;

    }

    .evento-card:hover{

        transform: translateY(-8px);

        box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;

    }

</style>