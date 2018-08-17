@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-forum') }}">Foro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-system') }}">Sistema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq-inscription') }}">Inscripción</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Preguntas Frecuentes refrentes a las ACTIVIDADES</h5>
            <p>FAQS</p>
            <p class="card-text text-danger">¿Si adelanto <b>ACTIVIDADES</b> optengo mi calificacion antes?
                <strong class="text-info">El hecho de que adelantes actividades no obliga al docente a calificar antes tu actividad, el docente puede o no calificar antes tu actividad a criterio propio. con respecto al calentario.</strong>
            </p>
            <a href="{{ route('home') }}" class="btn btn-primary">Inicio</a>
        </div>
    </div>
@endsection