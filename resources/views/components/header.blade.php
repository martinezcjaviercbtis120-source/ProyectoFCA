<div class="sticky-top shadow-sm">
    <nav class="navbar navbar-expand-lg border-bottom py-2" style="background:#ffffff;">
        <div class="container-fluid px-lg-5"> <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('Imagenes/Principal/Logo.png') }}" width="160" class="me-2">
                <span class="fw-bold lh-1" style="color: #0b3a63; font-size: 1.1rem;">
                    <span class="d-none d-xl-inline">"Luz, Ciencia y Verdad"</span>
                </span>
            </a>

            <form class="d-flex ms-lg-5 me-lg-5 flex-grow-1" style="max-width: 600px;">
                <div class="input-group">
                    <input class="form-control rounded-0" type="search" placeholder="¿Qué estás buscando hoy?">
                    <button class="btn btn-outline-secondary rounded-0" type="submit">🔍</button>
                </div>
            </form>

            <ul class="navbar-nav flex-row gap-4"> <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0" href="#">Servicios en línea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0" href="#">Correo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark small border-bottom border-secondary p-0" href="#">Calendario</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <div class="row g-0 w-100 text-center align-items-center">
            <div class="col-3 py-2" style="background:#c69214;">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold px-0" href="#" id="dropComunidad" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comunidad
                    </a>
                    <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden" aria-labelledby="dropComunidad">
                        <li><a class="dropdown-item py-2 border-bottom" href="/comunidad">Aspirantes</a></li>
                        <li><a class="dropdown-item py-2 border-bottom" href="/comunidad">Estudiantes</a></li>
                        <li><a class="dropdown-item py-2 border-bottom" href="/comunidad">Docentes</a></li>
                        <li><a class="dropdown-item py-2" href="/comunidad">Egresados</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-9 d-flex p-0" style="background:#0b3a63;">
                <div class="col-8 py-2 border-end border-white border-opacity-10">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-bold px-0" href="#" id="dropProgramas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programas y Desarrollo
                        </a>
                        <ul class="dropdown-menu shadow border-0 py-0 overflow-hidden" aria-labelledby="dropProgramas">
                            <li><a class="dropdown-item py-2 border-bottom" href="#">Oferta Educativa</a></li>
                            <li><a class="dropdown-item py-2 border-bottom" href="#">Investigación</a></li>
                            <li><a class="dropdown-item py-2 border-bottom" href="#">Vinculación</a></li>
                            <li><a class="dropdown-item py-2" href="#">Internacionalización</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 py-2">
                    <a class="nav-link text-white fw-bold px-0" href="#">Personal</a>
                </div>
            </div>
        </div>
    </div>
</div>