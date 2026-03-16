<!-- Cards de mi pagina de inicio (ejemplo de la pagina de W3Schools) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>card</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card {
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="container-fluid mt-5"> <!-- Para mas espacio debajo del carrusel -->
        <h2 class="text-center mb-4" style="color: #153e66;">Eventos</h2>
        <div class="row justify-content-center g-5"> <!-- Se utiliza para dejar espacio entre mis cards (g-#) -->


                <div id="carruselNoticias" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4 px-5">
                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm"
                                        style="border: none; border-bottom: 5px solid #c69214;">
                                        <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                            style="height: 200px; object-fit: cover;" class="card-img-top"
                                            alt="Evento 1">
                                        <div class="card-body d-flex flex-column text-center">
                                            <h5 class="card-title fw-bold">Evento 1</h5>
                                            <p class="card-text small">Descripcion breve del evento número uno.</p>
                                            <a href="/" class="btn mt-auto w-100"
                                                style="background: #153e66; color: white; border-radius: 0;">Ver
                                                más...</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm"
                                        style="border: none; border-bottom: 5px solid #c69214;">
                                        <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                            style="height: 200px; object-fit: cover;" class="card-img-top"
                                            alt="Evento 2">
                                        <div class="card-body d-flex flex-column text-center">
                                            <h5 class="card-title fw-bold">Evento 2</h5>
                                            <p class="card-text small">Descripcion breve del evento número dos.</p>
                                            <a href="/" class="btn mt-auto w-100"
                                                style="background: #153e66; color: white; border-radius: 0;">Ver
                                                más...</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm"
                                        style="border: none; border-bottom: 5px solid #c69214;">
                                        <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                            style="height: 200px; object-fit: cover;" class="card-img-top"
                                            alt="Evento 3">
                                        <div class="card-body d-flex flex-column text-center">
                                            <h5 class="card-title fw-bold">Evento 3</h5>
                                            <p class="card-text small">Descripcion breve del evento número tres.</p>
                                            <a href="/" class="btn mt-auto w-100"
                                                style="background: #153e66; color: white; border-radius: 0;">Ver
                                                más...</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm"
                                        style="border: none; border-bottom: 5px solid #c69214;">
                                        <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                            style="height: 200px; object-fit: cover;" class="card-img-top"
                                            alt="Evento 4">
                                        <div class="card-body d-flex flex-column text-center">
                                            <h5 class="card-title fw-bold">Evento 4</h5>
                                            <p class="card-text small">Descripcion breve del evento número cuatro.</p>
                                            <a href="/" class="btn mt-auto w-100"
                                                style="background: #153e66; color: white; border-radius: 0;">Ver
                                                más...</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row g-4 px-5">
                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm"
                                        style="border: none; border-bottom: 5px solid #c69214;">
                                        <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                            style="height: 200px; object-fit: cover;" class="card-img-top"
                                            alt="Evento 5">
                                        <div class="card-body d-flex flex-column text-center">
                                            <h5 class="card-title fw-bold">Evento 5</h5>
                                            <p class="card-text small">Descripcion breve del evento número cinco.</p>
                                            <a href="/" class="btn mt-auto w-100"
                                                style="background: #153e66; color: white; border-radius: 0;">Ver
                                                más...</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm"
                                        style="border: none; border-bottom: 5px solid #c69214;">
                                        <img src="{{ asset('Imagenes/Principal/Logo.png') }}"
                                            style="height: 200px; object-fit: cover;" class="card-img-top"
                                            alt="Evento 6">
                                        <div class="card-body d-flex flex-column text-center">
                                            <h5 class="card-title fw-bold">Evento 6</h5>
                                            <p class="card-text small">Descripcion breve del evento número seis.</p>
                                            <a href="/" class="btn mt-auto w-100"
                                                style="background: #153e66; color: white; border-radius: 0;">Ver
                                                más...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carruselNoticias"
                        data-bs-slide="prev" style="width: 5%; filter: invert(1);">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carruselNoticias"
                        data-bs-slide="next" style="width: 5%; filter: invert(1);">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
</body>
</html>
