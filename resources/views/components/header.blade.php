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

            <!-- Nuestro buscador, usamos GET para la búsqueda y query para pasar el término de búsqueda -->
            <form action="{{route('buscar')}}" method="GET" class="d-flex ms-lg-5 me-lg-5 flex-grow-1" style="max-width: 600px;">
                <div class="input-group">
                    <input type="search" name="query" class="form-control rounded-0" placeholder="¿Qué estás buscando hoy?" value="{{ request('query') }}" required>

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
                    <a class="nav-link text-dark small border-bottom border-secondary p-0" href="/servicios">Servicios en línea</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0" href="/contacto">Contacto</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0"
                        href="/calendario">Calendario</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Nav Bar De Menu Desplegables-->
    <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background:#0b3a63;">
        <div class="container-fluid p-0 flex-wrap">

            <!-- Menu y Botón alineados para cel-->
            <div class="d-flex w-100 justify-content-between align-items-center d-lg-none px-4 py-2"
                style="background:#0b3a63;">
                <span class="text-white fw-bold m-0 fs-5">Menú Principal</span>

                <button class="navbar-toggler border-white border-opacity-20" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarUadyPrincipal">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Nav Bar collapse para que Bootstrap maneje el mostrar/ocultar de forma automática-->
            <div class="collapse navbar-collapse justify-content-center w-100" id="navbarUadyPrincipal">
                <div class="d-flex flex-column flex-lg-row text-center text-lg-start w-100 justify-content-center py-2 py-lg-0">
                    <div class="py-2 px-4 menu-item-border">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold px-0" href="#" id="dropComunidad" role="button" data-bs-toggle="dropdown">Comunidad</a>
                            <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden" aria-labelledby="dropComunidad">
                                <li><a class="dropdown-item py-2 border-bottom" href="/estudiantes">Estudiantes</a></li>
                                <li><a class="dropdown-item py-2 border-bottom" href="/docentes">Docentes</a></li>
                                <li><a class="dropdown-item py-2" href="/egresados">Egresados</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Nav Bar collapse de programas y desarrollo -->
                    <div class="py-2 px-4 menu-item-border">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold px-0" href="#" id="dropProgramas" role="button" data-bs-toggle="dropdown">Programas y Desarrollo</a>
                            <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden" aria-labelledby="dropProgramas">
                                <li><a class="dropdown-item py-2 border-bottom" href="/oferta-educativa">Oferta Educativa</a></li>
                                <li><a class="dropdown-item py-2 border-bottom" href="/investigacion">Investigación</a></li>
                                <li><a class="dropdown-item py-2 border-bottom" href="/vinculacion">Vinculación</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Nav Bar collapse de personal -->
                    <div class="py-2 px-4">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold px-0" href="#" id="dropPersonal" role="button" data-bs-toggle="dropdown">Personal</a>
                            <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden" aria-labelledby="dropPersonal">
                                <li><a class="dropdown-item py-2" href="/personal">Trabajadores</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- barra decorativa de color oro -->
  <div class="w-100" style="background-color: #c69214; height: 5px;"></div>
</div>