@extends('layouts.app')

@section('title', 'Exámenes')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="app">
                    <quiz-component v-bind:quiz="{{ json_encode($quiz) }}"></quiz-component>
                </div>
                <!--<div class="card">
                    <div class="card-header">
                        Panel Principal -
                        <span class="alert-danger">
                            Tiempo restante = 02:00:00 <i class="far fa-pause-circle"></i>
                        </span>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="text-lg-left">
                            <b>Responde todas las preguntas</b>.- Recuerda que no vas a poder avanzar si no has contestado todas las preguntas.
                        </p>
                    </div>

                    <div class="card-body">
                        <section class="jumbotron text-center">
                            <div class="container">
                                <h1 class="jumbotron-heading">{{ $quiz->title }}</h1>
                                <p>
                                    <a href="#" class="btn btn-primary my-2">Iniciar</a>
                                    <a href="{{ URL::previous() }}" class="btn btn-secondary my-2">regresar</a>
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success btn-block font-4xl align-content-center">Enviar Respuestas</a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
@endsection