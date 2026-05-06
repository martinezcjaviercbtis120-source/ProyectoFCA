@extends('layouts.Principal')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Docentes</h2>

        <div class="row">
            @foreach ($docentes as $docente)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 shadow">

                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $docente->nombre }} {{ $docente->apellido }}
                            </h5>
                            <p><strong>Email:</strong> {{ $docente->email }}</p>
                            <p><strong>Teléfono:</strong> {{ $docente->telefono }}</p>
                            <p><strong>Asignatura:</strong> {{ $docente->asignatura }}</p>
                            <p><strong>Área:</strong> {{ $docente->area }}</p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
        {{$docentes->links()}}
        </div>
    </div>
@endsection
