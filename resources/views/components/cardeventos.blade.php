@props(['eventos', 'titulo'])

<div class="container py-5">

    <!-- Titulo Principal -->
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color:#153e66;">
            {{ $titulo }}
        </h2>
        <h2 class="fw-normal" style="color:#4B515D;">
            Mantente informado sobre los próximos eventos académicos y universitarios
            </p>

            <div class="mx-auto mt-2"
                style="
                width:120px;
                height:4px;
                background:#c69214;
                border-radius:10px;
             ">
            </div>

    </div>

    <!-- Eventos -->
    <div class="row gy-4">

        @foreach ($eventos as $evento)
            <div class="col-12">

                <!-- Cards -->
                <div class="card border-0 shadow-lg overflow-hidden evento-card">

                    <div class="row g-0 align-items-center">

                        <!-- Imagen Card -->
                        <div class="col-lg-5">

                            <img src="{{ asset('Imagenes/Eventos/' . $evento->imagen) }}" class="img-fluid w-100"
                                style="
                                    height:380px;
                                    object-fit:cover;
                                 "
                                alt="{{ $evento->titulo }}">

                        </div>

                        <!-- Contenido -->
                        <div class="col-lg-7 bg-white">

                            <div class="card-body p-4 d-flex flex-column justify-content-center h-100 text-center">

                                <!-- Badge -->
                                <span class="badge align-self-center mb-3 px-4 py-2"
                                    style="
                                        background:#c69214;
                                        color:white;
                                        font-size:.9rem;
                                        border-radius:10px;
                                      ">
                                    Próximo Evento
                                </span>

                                <!-- Titulo Card -->
                                <h2 class="fw-bold mb-4"
                                    style="
                                        color:#153e66;
                                        font-size:1.7rem;
                                    ">
                                    {{ $evento->titulo }}
                                </h2>

                                <!-- Linea decorativa -->
                                <div class="mx-auto mb-4"
                                    style="
                                        width:80px;
                                        height:4px;
                                        background:#c69214;
                                        border-radius:10px;
                                     ">
                                </div>

                                <!-- Descripcion del card -->
                                <p class="text-muted fs-6 lh-lg">
                                    {{ Str::limit($evento->descripcion, 180) }}
                                </p>

                                <!-- Boton -->
                                <div class="mt-4">
                                    <button type="button" class="btn px-5 py-3 fw-bold"
                                        style="
                                                background:#153e66;
                                                color:white;
                                                border-radius:10px;
                                            "
                                        data-bs-toggle="modal" data-bs-target="#modalEvento{{ $evento->id }}">
                                        Ver evento completo
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="modalEvento{{ $evento->id }}" tabindex="-1"
                    aria-labelledby="labelEvento{{ $evento->id }}" aria-hidden="true">

                    <div class="modal-dialog modal-lg modal-dialog-centered">

                        <div class="modal-content border-0">

                            <!-- Header del modal -->
                            <div class="modal-header"
                                style="
                                    background:#153e66;
                                    color:white;
                                 ">
                                <h5 class="modal-title fw-bold" id="labelEvento{{ $evento->id }}">
                                    {{ $evento->titulo }}
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                                </button>

                            </div>

                            <!-- Body del modal -->
                            <div class="modal-body p-4 text-center">

                                <img src="{{ asset('Imagenes/Eventos/' . $evento->imagen) }}"
                                    class="img-fluid rounded shadow mb-4"
                                    style="
                                        max-height:280px;
                                        width:auto;
                                        object-fit:contain;
                                     "
                                    alt="{{ $evento->titulo }}">
                                <p class="fs-6 lh-lg text-secondary">
                                    {{ $evento->evento }}
                                </p>

                            </div>

                            <!-- Footer del modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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

<!-- Estilos cards -->
<style>
    .evento-card {

        border-radius: 20px;
        transition: all .35s ease;

    }

    .evento-card:hover {

        transform: translateY(-6px);

        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;

    }

    body {

        font-family: 'Poppins', sans-serif;

    }
</style>
