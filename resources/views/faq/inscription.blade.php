@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-activities') }}">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-forum') }}">Foro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-system') }}">Sistema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('faq-inscription') }}">Inscripción</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Preguntas Frecuentes refrentes a la INSCRIPCIÓN</h5>

            <p class="card-text text-danger">#PASO 1
                <strong class="text-info">Registrarse.- llenar los datos de registro.</strong>
            </p>
            <p class="card-text text-danger">#PASO 2
                <strong class="text-info">Modificar Perfil en el boton <button class="btn-primary" disabled>Editar perfil</button> del menu inicio.</strong>
            </p>
            <p class="card-text text-danger">#PASO 3
                <strong class="text-info">Sibir los 3 archivos PDF que se te solicitan y <button class="btn-success" disabled>ENVIAR SOLICITUD DE INSCRIPCIÓN</button>.</strong>
            </p>
            <p class="card-text text-danger">#PASO 4
                <strong class="text-info">Esperar respuesta por parte del <b>Centro Nacional de la Transfusión Sanguínea</b>.</strong>
            </p>

            <p>FAQS</p>
            <p class="card-text text-danger">¿De que Tamaño o peso son los PDF?
                <strong class="text-info">El peso maximo de los PDF admitidos en el sistema es de 2Mb.</strong>
            </p>

            <a href="{{ route('home') }}" class="btn btn-primary">Inicio</a>
        </div>
    </div>
@endsection