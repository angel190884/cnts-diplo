@extends('layouts.app')

@section('title', 'Exámenes')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('quizzes.qualify', $quiz) }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Panel Principal - examen : {{ $quiz->title }}
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p class="text-lg-left"><b>Atención: </b></p>
                            <p class="text-lg-left">Recuerda que no vas a poder avanzar si no has contestado todas las preguntas</p>
                            <p class="text-lg-left">No cerrar esta pestaña</p>
                            <p class="text-lg-left">No actualizar la pagina<p>
                            <p class="text-lg-left">Si no respetas los puntos anteriores ¡las preguntas cambiaran!<p>
                            <p class="text-lg-left">Solo podrás enviar tus respuestas una sola vez, si no estas seguro de este
                                proceso te invito a leer el manual de la plataforma. </p>
                            <a href="{{ URL::previous() }}" class="btn btn-outline-danger my-2">regresar y cancelar</a>
                        </div>

                        <div class="card-body">
                            @foreach($questions->random($quiz->number_questions) as $question)
                                <section class="container-fluid">
                                    <main role="main" class="container">
                                        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-reddit rounded box-shadow">
                                            <i class="far fa-question-circle fa-4x"></i>
                                            <div class="lh-100 pl-5">
                                                <h6 class="mb-0 text-white lh-100">{{ strtoupper($question->question) }}</h6>
                                            </div>
                                        </div>

                                        <div class="my-3 p-3 bg-white rounded box-shadow">
                                            <h6 class="border-bottom border-gray pb-2 mb-0">Selecciona una respuesta</h6>
                                            <div class="media text-muted pt-3">
                                                <div class="form-inline">
                                                    <div class="container-fluid">
                                                        @foreach($question->options->shuffle() as $option)
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label for="question"></label>
                                                                    <input name='{{ $question->id }}' value='{{ $option->id }}' type="radio" class="form-control" id="question" required>
                                                                </div>
                                                                <div class="col-md-10 form-control">
                                                                    <p class="text-uppercase">{{ $option->option }}</p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </section>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block font-4xl align-content-center">Enviar Respuestas</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection