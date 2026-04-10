<!-- Ajuste de las imagenes -->
<style>
    .container-fluid.p-0 {
        margin-top:0; 
    }

    .carousel-img {
        height: 500px;
        object-fit: cover;
        filter: brightness(0.7);
        width: 100%;
    }

    .carousel-caption {
        max-width: 70%;
        margin: 0 auto;
        bottom: 20%;
    }
</style>

<!-- Carrusel -->
<section class="container-fluid p-0 m-0">
<div id="carouselExampleCaptions" class="carousel slide">

    <!-- Indicadores -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="Imagenes/Principal/Bannerprincipal.png" class="d-block w-100 carousel-img" alt="FCA">
            <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded-4 p-3">
                <h5 class="display-4 fw-bold">Bienvenidos a la Facultad de Contaduría y Administración</h5>
            </div>
        </div>

        <div class="carousel-item">
            <img src="Imagenes/Principal/PDI.jpg" class="d-block w-100 carousel-img" alt="PDI">
            <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded-4 p-3">
                <h5 class="display-4 fw-bold">Plan de Desarrollo Institucional 2026-2040</h5>
            </div>
        </div>

        <div class="carousel-item">
            <img src="Imagenes/Principal/MDF.jpg" class="d-block w-100 carousel-img" alt="MDF">
            <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded-4 p-3">
                <h5 class="display-5 fw-bold">Módulo de Atención Fiscal</h5>
            </div>
        </div>

    </div>

    <!-- Estos son nuestros botones -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>