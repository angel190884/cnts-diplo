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
                    <a class="nav-link active" href="{{ route('faq-system') }}">Sistema</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Preguntas Frecuentes refrentes al SISTEMA</h5>

            <p class="card-text text-danger">¿Hasta que horario tienes si tu fecha limite es hoy?
                <strong class="text-info">El sistema toma como limite de tiempo las 23:59:59, esto quiere decir que si tienes un examen que vence hoy o una actividad por mandar deberás terminarlo o enviarla antes de esa hora, cabe aclarar que el examen deberá ser terminado antes de la hora limite, si rebasas el horario establecido como fin del día y aun estas en proceso de examen el sistema no te permitirá acabar el examen aunque este abierta la pestaña de examen en tu navegador.</strong>
            </p>

            <a href="{{ route('home') }}" class="btn btn-primary">Inicio</a>
        </div>
    </div>
@endsection