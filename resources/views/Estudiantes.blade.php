@extends('layouts.principal')

@section('content')
    <div class="container py-5">

        <!-- Titulo -->
        <div class="text-center mb-5" style="color: #153e66;">
            <h1 class="fw-bold">Coordinación de Becas y Programa Padrino Académico</h1>
        </div>

        <!-- Imagen debajo del titulo-->
        <div class="col-lg-12 col-md-12 col-12 mb-4 d-flex">
            <div class="card flex-grow-1 shadow-sm border-0 bg-white">
                <img src="{{asset('/Imagenes/Principal/padrino1.jpg')}}" class="card-img-top img-fluid w-100" alt="CordEgre" style="object-fit: cover; height: 350px; border-radius: 0;">
            </div>
        </div>

        <!-- Informacion-->
        <div class="text-left mb-2" style="color: #153e66;">
            <h1 class="fw-normal">Programa Padrino Académico</h1>
        </div>

        <p class="fs-5" style="text-align: justify;">La Facultad de contaduría y Administración impulsa acciones para reducir la deserción escolar, identificando la
            falta de recursos económicos como una de sus principales causas, lo que dio origen al programa Padrino
            Académico, cuyo objetivo es evitar que los alumnos abandonen sus estudios por motivos financieros mediante el
            apoyo de la iniciativa privada, egresados y sociedad en general, fomentando no solo un respaldo económico
            deducible de impuestos, sino también un vínculo solidario y humano que permita a los benefactores dejar una
            huella significativa en la vida y el futuro profesional de los estudiantes.</p>

        <div class="row mt-6">
    <!-- Cards de los padrinos ordenadas-->        
    @foreach ($padrinos as $padrino)
        <div class="col-12 col-lg-6 mb-4">
            <div class="card h-100 shadow overflow-hidden border-0">
                <div class="row g-0 h-100">
                    
                    <div class="col-md-3 bg-light d-flex align-items-center justify-content-center p-2">
                        @if($padrino->imagen)
                            <!-- Ruta de la carpeta donde estan las fotos de nuestros padrinos -->
                            <img src="{{asset('Imagenes/Padrinos/' . $padrino->imagen)}}" 
                                 class="img-fluid rounded shadow-sm object-fit-cover" 
                                 alt="{{$padrino->nombre}}"
                                 style="width: 100%; height: auto; max-height: 180px;">
                        @else
                            <!-- Icono de respaldo si un padrino no tiene foto asignada -->
                            <i class="bi bi-person-square text-secondary fs-1"></i>
                        @endif
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- Título de la Card: Nombre completo del padrino -->
                            <h5 class="card-title fw-bold" style="color: #153e66;">
                                {{ $padrino->nombre }}
                            </h5>
                            <hr class="my-2">
                            
                            <!-- Profesión del Padrino con icono -->
                            <p class="mb-1 text-secondary">
                                <i class="bi bi-briefcase me-2" style="color: #c69214;"></i>
                                <strong>Profesión:</strong> {{ $padrino->profesion }}
                            </p>
                            
                            <!-- Correo Electrónico con icono-->
                            <p class="mb-1 text-secondary">
                                <i class="bi bi-envelope-at me-2" style="color: #153e66;"></i>
                                <strong>Email:</strong> {{ $padrino->correo }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
