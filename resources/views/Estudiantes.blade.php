@extends('layouts.principal')

@section('content')
    <div class="container py-5">

        <!-- Titulo -->
        <div class="text-center mb-5" style="color: #153e66;">
            <h1 class="fw-bold">Coordinación de Becas y Programa Padrino Académico
            </h1>
        </div>

        <!-- Imagen -->
        <div class="col-lg-12 col-md-12 col-12 mb-4 d-flex">
            <div class="card flex-grow-1 shadow-sm border-0 bg-white">
                <img src="{{ asset('/Imagenes/Principal/padrino1.jpg') }}" class="card-img-top img-fluid w-100" alt="CordEgre"
                    style="object-fit: cover; height: 350px; border-radius: 0;">
            </div>
        </div>

        <!-- Informacion-->
        <div class="text-left mb-2" style="color: #153e66;">
            <h2 class="fw-normal">Programa Padrino Académico</h2>
        </div>

        <p>La Facultad de contaduría y Administración impulsa acciones para reducir la deserción escolar, identificando la
            falta de recursos económicos como una de sus principales causas, lo que dio origen al programa Padrino
            Académico, cuyo objetivo es evitar que los alumnos abandonen sus estudios por motivos financieros mediante el
            apoyo de la iniciativa privada, egresados y sociedad en general, fomentando no solo un respaldo económico
            deducible de impuestos, sino también un vínculo solidario y humano que permita a los benefactores dejar una
            huella significativa en la vida y el futuro profesional de los estudiantes.</p>

        <div class="card mx-auto" style="width: 20rem;">
            <img class="card-img-top" src="{{ asset('Imagenes/Principal/fulanita.png') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Contacto para pardino academico</h5>
                <p class="card-text">Dra. Fulanita Fulana</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Coordinadora</li>
                <li class="list-group-item">fulful@correo.inventado.mx</li>
            </ul>
        </div>
    </div>
@endsection
