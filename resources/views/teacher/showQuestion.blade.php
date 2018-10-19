@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $question->question }}</h1>
            <p class="lead">{{ $question->observations }}</p>
            <p class="lead">
                @if(auth()->user()->hasRole('teacher'))
                    <a class="btn btn-primary btn-lg" href="{{ route('scoreQuestion',$question->slug) }}" role="button">Calificar Pregunta</a>
                @endif
            </p>
            <p class="text-info"><sub>TIENES HASTA EL {{ strtoupper($question->formattedEnd) }} PARA RESPONDER EL FORO O LA PREGUNTA.</sub></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Foro.- Aqui podras responder a la pregunta hecha por el profesor.
            </div>
            <div class="card-body">
                @role('teacher')
                    @include('partials.disqusQuestions')
                @endrole
                @role('student')
                    @if($today < $question->end)
                        @include('partials.disqusQuestions')
                    @else
                        <p class="alert-danger">LO SENTIMOS EL ULTIMO DIA PARA COMENTAR FUE EL {{ strtoupper($question->formattedEnd) }}</p>
                    @endif
                @endrole

            </div>
        </div>
    </div>
@stop