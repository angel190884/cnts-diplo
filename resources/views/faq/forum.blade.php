@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('faq-forum') }}">Foro</a>
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
            <h5 class="card-title">Preguntas Frecuentes refrentes al FORO</h5>
            <p>FAQS</p>
            <p class="card-text text-danger">¿No encuentras tu mensaje en los foros?
                <strong class="text-info">El foro es una modulo externo lo cual significa que deberás ingresar y registrarte con el mismo mail que te registraste dentro del sistema del diplomado, ya que tomara tu nombre del modulo externo y las publicaciones deberán tener tu nombre para ser tomadas en cuenta.</strong>
            </p>

            <p class="card-text text-danger">¿Como enviar mensajes en los foros?
                <strong class="text-info">Los mensajes se publicaran con el Botón "Publicar como" si no presionas el botón debidamente el mensaje se perderá al actualizar la pagina.</strong>
            </p>

            <a href="{{ route('home') }}" class="btn btn-primary">Inicio</a>
        </div>
    </div>
@endsection