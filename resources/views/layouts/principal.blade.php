<!-- Pagina de la FCA inicio -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facultad de contaduría y Administración @yield('titulo')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <body>

    <!-- HEADER -->
    @include('components.header')

    <!-- Carousel -->
    @include('components.carruselinicio')

    <!-- Contenido de Noticias -->
    @include('components.cardnoticias')

    <!-- Contenido de Eventos -->
    @include('components.cardeventos')

    <!-- Footer -->
    @include('components.footer')
</body>
</html>