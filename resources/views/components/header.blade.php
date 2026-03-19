<!-- Diseño de Navbar del inicio -->
<nav class="navbar navbar-expand-lg border-bottom" style="background:#ffffff;">
    <div class="container-fluid">

        <!-- Apartados del navbar/Logo y Slogan de la Factuldad -->
        <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="/">
            <img src="{{ asset('Imagenes/Principal/Logo.png') }}" width="180" class="me-2">
            <span>"Luz, Ciencia y Verdad"</span>
        </a>

        <!-- Apartado de buscador en el navbar sacado de la pagina getbootstrap -->
        <form class="d-flex mx-auto" style="width:350px;">
            <input class="form-control rounded-0" type="search" placeholder="Buscar">
            <button class="btn btn-outline-secondary rounded-0">
                🔍
            </button>
        </form>

        <!-- Apartado de enlaces en Navbar -->
        <ul class="navbar-nav ms-auto flex-row gap-4">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/">Servicios en línea</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/">Correo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/">Calendario</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/">Personal</a>
            </li>
        </ul>
    </div>
</nav>

<!-- NavBar Secundario -->
<nav class="navbar navbar-expand-lg p-0">

    <!-- Primera mitad de navbar (Color oro) -->
    <div class="w-100" style="background:#c69214;">
        <div class="container">
            <ul class="navbar-nav justify-content-center w-100 text-center">

                <li class="nav-item flex-fill">
                    <a class="nav-link text-dark fw-semibold" href="/">Inicio</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-dark fw-semibold" href="/">Aspirantes</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-dark fw-semibold" href="/">Estudiantes</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-dark fw-semibold" href="/">Docentes</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-dark fw-semibold" href="/">Egresados</a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Segunda mitad de navbar (Color azul) -->
    <div class="w-100" style="background:#0b3a63;">
        <div class="container">
            <ul class="navbar-nav justify-content-center w-100 text-center">

                <li class="nav-item flex-fill">
                    <a class="nav-link text-white fw-semibold" href="/">Nuestra Facultad</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-white fw-semibold" href="/">Oferta Educativa</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-white fw-semibold" href="/">Investigación</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-white fw-semibold" href="/">Vinculación</a>
                </li>

                <li class="nav-item flex-fill">
                    <a class="nav-link text-white fw-semibold" href="/">Internacionalización</a>
                </li>

            </ul>
        </div>
    </div>

</nav>