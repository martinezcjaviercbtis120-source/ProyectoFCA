<!-- Componente de encabezado para la página principal -->
<div class="sticky-top shadow-sm">
    <!-- Nuestra Barra de navegación principal -->
    <nav class="navbar navbar-expand-lg border-bottom py-2" style="background:#ffffff;">
        <div class="container-fluid px-lg-5"> <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('Imagenes/Principal/Logo.png') }}" width="160" class="me-2">
                <span class="fw-bold lh-1" style="color: #0b3a63; font-size: 1.1rem;">
                    <span class="d-none d-xl-inline">"Luz, Ciencia y Verdad"</span>
                </span>
            </a>

            <!-- Nuestro buscador sacado de la pagina de getbootstrap.com-->
            <form action="{{url('/construccion')}}" class="d-flex ms-lg-5 me-lg-5 flex-grow-1"
                style="max-width: 600px;">
                <div class="input-group">
                    <input type="search" class="form-control rounded-0" placeholder="¿Qué estás buscando hoy?">

                    <!--Estilo del botón de búsqueda azul-->
                    <button class="btn rounded-0 px-3" type="submit" id="button-search"
                        style="background-color: #0b3a63; color: white; border: 1px solid #0b3a63;">
                        Buscar
                    </button>
                </div>
            </form>

            <!-- Navs de la derecha-->
            <ul class="navbar-nav flex-row gap-4">
                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0"
                        href="/construccion">Servicios en
                        línea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0"
                        href="/construccion">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0"
                        href="/construccion">Calendario</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Segunda barra de navegación con los enlaces a las secciones principales Comunidad, programas y desarrollo, personal -->
    <nav class="navbar navbar-expand-lg p-0" style="background-color: #0b3a63;">
        <!-- navbar-expand-lg para que el menú hamburguesa solo aparezca en móvil -->
        <div class="container-fluid p-0">

            <!-- Texto de menu a la hora de que aparezca el menu hamburguesa -->
            <span class="navbar-brand d-lg-none mx-auto fw-bold text-white"
                style="font-size: 1.1rem; letter-spacing: 1px;">
                Menú Principal
            </span>

            <!-- El Botón Hamburguesa -->
            <button class="navbar-toggler ms-auto m-2 bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#hambur" aria-controls="navFCA" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenedores Colapsables -->
            <div class="collapse navbar-collapse justify-content-center" id="hambur">
                <div class="row g-0 text-center align-items-center shadow-sm" style="border-radius: 4px;">

                    <!-- Apartados col-lg-3 para escritorio, col-12 para móvil -->
                    <div class="col-lg-auto col-12 py-2 px-4" style="background:#c69214;">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle text-dark fw-bold px-0" href="#" id="dropComunidad"
                                role="button" data-bs-toggle="dropdown">
                                Comunidad
                            </a>
                            <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden"
                                aria-labelledby="dropComunidad">
                                <li><a class="dropdown-item py-2 border-bottom" href="/estudiantes">Estudiantes</a></li>
                                <li><a class="dropdown-item py-2 border-bottom" href="/docentes">Docentes</a></li>
                                <li><a class="dropdown-item py-2" href="/egresados">Egresados</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contenedor Azul: col-lg-9 para escritorio, col-12 para móvil -->
                    <div class="col-lg-auto col-12 d-flex flex-wrap p-0" style="background:#0b3a63;">
                        <div class="col-lg-auto col-12 py-2 px-4 border-end border-white border-opacity-10">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle text-white fw-bold px-0" href="#"
                                    id="dropProgramas" role="button" data-bs-toggle="dropdown">
                                    Programas y Desarrollo
                                </a>
                                <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden"
                                    aria-labelledby="dropProgramas">
                                    <li><a class="dropdown-item py-2 border-bottom" href="/oferta-educativa">Oferta
                                            Educativa</a></li>
                                    <li><a class="dropdown-item py-2 border-bottom" href="#">Investigación</a>
                                    </li>
                                    <li><a class="dropdown-item py-2 border-bottom" href="#">Vinculación</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-auto col-12 py-2 px-4">
                            <a class="nav-link text-white fw-bold px-0" href="#">Personal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>