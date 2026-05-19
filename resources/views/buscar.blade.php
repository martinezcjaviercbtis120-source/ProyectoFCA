@extends('layouts.Principal')

@section('content')
    <div class="container my-5" style="min-height: 50vh;">
        <div class="mb-4">
            <h2 class="fw-bold" style="color: #153e66;">Búsqueda de Secciones</h2>
            <p class="text-muted">No pudimos redirigirte automáticamente con la palabra: <strong class="text-dark">"{{ $query }}"</strong></p>
        </div>

        @if (empty($sugerencias)) <!-- Si no hay sugerencias, mostramos un mensaje informativo con sugerencias -->
            <div class="alert alert-info text-center py-5 border-0 shadow-sm" style="border-radius: 15px;">
                <i class="bi bi-search fs-1 text-secondary d-block mb-3"></i>
                <h4 class="fw-bold" style="color: #153e66;">¿No encuentras lo que buscas?</h4>
                <p class="text-muted mb-0">Intenta buscando palabras clave de nuestro menú como: <strong>Estudiantes, Docentes, Egresados o Trabajadores</strong>.</p>
            </div>
        @else
            <div class="row g-4">
                <div class="col-12">
                    <h5 class="fw-bold text-secondary mb-2">Quizá quisiste ir a alguno de estos apartados:</h5>
                </div>
                @foreach ($sugerencias as $url)
                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm border-0 p-4 h-100 justify-content-between" style="border-radius: 12px; border-left: 5px solid #c69214;">
                            <div>
                                <h5 class="fw-bold mb-1" style="color: #153e66;">
                                    <!-- Se formatea el nombre de la URL para que se pueda ver el link -->
                                    @if ($url == '/oferta-educativa')
                                        Oferta Educativa
                                    @elseif($url == '/trabajadores')
                                        Atención a Trabajadores
                                        <!-- Aqui deja las rutas limpias del nuestras vistas sin mayusculas -->
                                    @else
                                        {{ucfirst(str_replace('/', '', $url))}}
                                    @endif
                                </h5>
                                <p class="text-muted small mb-3">Sección de la Facultad de Contaduría y Administración.</p>
                            </div>
                            <!-- Botón para que nos redirige a la vista sugerida -->
                            <a href="{{$url}}" class="btn text-white fw-bold w-100 mt-2" style="background: #153e66; border-radius: 8px;">
                                Ingresar al apartado →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
