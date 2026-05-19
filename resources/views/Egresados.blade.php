@extends('layouts.principal')

@section('content')

    <div class="container py-5">

        <!-- Titulo -->
        <div class="text-center mb-5" style="color: #153e66;">
            <h1 class="fw-bold">Coordinación de Seguimiento a Egresados</h1>
        </div>

        <!-- Imagen -->
        <div class="col-lg-12 col-md-12 col-12 mb-4 d-flex">
            <div class="card flex-grow-1 shadow-sm border-0 bg-white">
                <img src="{{asset('/Imagenes/Principal/egresados.jpg')}}" class="card-img-top img-fluid w-100" alt="CordEgre" style="object-fit: cover; height: 350px; border-radius: 0;">
            </div>
        </div>

        <!-- Informacion-->
        <div class="text-left mb-2" style="color: #153e66;">
            <h3 class="fw-normal">Coordinación de Seguimiento a Egresados</h3>
        </div>

        <p>La Coordinación de Seguimiento a Egresados es la unidad responsable del diseño y oferta de productos académicos
            dirigidos a la comunidad de alumnos egresados de nuestros programas de licenciatura y posgrado.</p>
        <p>Estos consisten esencialmente en:</p>

        <ul>
            <li>Cursos de Actualización para Titulación</li>
            <li>Cursos de preparación para presentar el Examen General de Egreso de Licenciatura (EGEL), del CENEVAL.</li>
        </ul>

        <!-- Se utilizo de ejemplo el codigo visto en clase para mostrar los egresados registrados en la base de datos-->
        <div class="container mt-4">
            <h2 class="mb-3 text-center" style="color: #153e66;">Listado de Alumnos Egresados</h2>
            @if (isset($egresados))
                <div class="table-responsive">
                    <table id="tablaegresados" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Carrera</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($egresados as $egresado)
                                <tr>
                                    <td>{{ $egresado->nombre }}</td>
                                    <td>{{ $egresado->apellido }}</td>
                                    <td>{{ $egresado->carrera }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">
                                        No hay egresados registrados.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
    <!-- paginacion de los egresados -->
    <div class="d-flex justify-content-center mt-4">
        {{$egresados->links()}}
    </div>
    </div>
@endsection