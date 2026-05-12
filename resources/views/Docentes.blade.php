@extends('layouts.Principal')

@section('content')
    <div class="container mt-5"style="color: #153e66;">
        <h2 class="text-center mb-4 fw-bold">Docentes</h2>

        <div class="row">
            @foreach ($docentes as $docente)
                <div class="col-12 col-lg-6 mb-4">
                    <div class="card h-100 shadow overflow-hidden">
                        <div class="row g-0 h-100">
                            <div class="col-md-3 bg-light d-flex align-items-center justify-content-center">
                                @if($docente->imagen)
                                    <img src="{{asset('Imagenes/Docentes/' . $docente->imagen) }}" 
                                         class="img-fluid rounded shadow-sm object-fit-cover" 
                                         alt="{{ $docente->nombre }}"
                                         style="width: 100%; height: auto; max-height: 180px;">
                                @endif
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">
                                        {{ $docente->nombre }} {{ $docente->apellido }}
                                    </h5>
                                    <hr class="my-2">
                                    <p class="mb-1 text-secondary"><i class="bi bi-envelope-at me-2"></i><strong>Email:</strong> {{ $docente->email }}</p>
                                    <p class="mb-1 text-secondary"><i class="bi bi-telephone me-2"></i><strong>Teléfono:</strong> {{ $docente->telefono }}</p>
                                    <p class="mb-1 text-secondary"><i class="bi bi-book me-2"></i><strong>Asignatura:</strong> {{ $docente->asignatura }}</p>
                                    <p class="mb-1 text-secondary"><i class="bi bi-geo-alt me-2"></i><strong>Área:</strong> {{ $docente->area }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $docentes->links() }}
        </div>
    </div>
@endsection