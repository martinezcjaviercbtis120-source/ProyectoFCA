<!-- Las variables que se reciben desde la vista son: $noticias, $titulo, $idCarrusel -->
@props(['noticias', 'titulo', 'idCarrusel'])

<div class="container-fluid mt-4">
    <!--tITULO DE NUESTRO CARD DE NOTICIAS CARRUSEL>-->
    <h2 class="text-center mb-4" style="color: #153e66;">{{ $titulo }}</h2>

   <!--Carrusel de bootstrap-->
    <div id="{{ $idCarrusel }}" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
        <div class="carousel-inner">
            
            <!--Nos sirve para agrupar de 4 en 4 nuestros cards-->
            @foreach($noticias->chunk(4) as $grupo)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row g-4 px-5 justify-content-center">
                        
                        @foreach($grupo as $noticia)
                            <div class="col-md-3">
                                <div class="card h-100 shadow-sm" style="border: none; border-bottom: 5px solid #c69214;">
                                    <!--Imagen de la noticia-->
                                    <img src="{{ asset('Imagenes/Principal/' . ($noticia->imagen ?? 'Logo.png')) }}" 
                                         class="card-img-top" style="height: 200px; object-fit: cover;" 
                                         alt="{{ $noticia->titulo }}">
                                    <!--Datos de la noticia-->
                                    <div class="card-body d-flex flex-column text-center">
                                        <h5 class="card-title fw-bold">{{ $noticia->titulo }}</h5>
                                        <p class="card-text small text-muted">{{ $noticia->descripcion }}</p>
                                        <a href="#" class="btn mt-auto w-100" 
                                           style="background: #153e66; color: white; border-radius: 0;">
                                           Ver más...
                                        </a>
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