@extends('layouts.app')

@section('title', 'Preguntas')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Panel Principal - Preguntas del Examen.- <b>{{strtoupper($quiz->title) }}</b>.
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <table class="table table-bordered table-striped {{ count($quiz->questions) > 0 ? 'datatable' : '' }} dt-select">
                                    <thead>
                                        <tr>
                                            <th>Preguntas</th>
                                            <th>
                                                <a href="{{ route('questions.create', $quiz) }}" class="btn btn-success">Nueva Pregunta</a>
                                                <a href="{{ route('quizzes.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i></a>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($quiz->questions as $question)
                                        <tr data-entry-id="{{ $question->id }}">
                                            <td>{{ $question->question }}</td>
                                            <td>
                                                <a href="{{ route('questions.edit',$question) }}" class="btn btn-sm btn-outline-info">editar</a>
                                                <a href="{{ route('questionOptions.index',$question) }}" class="btn btn-sm btn-outline-secondary">Opciones de respuestas</a>
                                                {!! Form::open(array(
                                                    'style' => 'display: inline-block;',
                                                    'method' => 'DELETE',
                                                    'onsubmit' => "return confirm('¿Estas seguro de querer borrar la pregunta?');",
                                                    'route' => ['questions.destroy', $question->id])) !!}
                                                {!! Form::submit('borrar', array('class' => 'btn btn-sm btn-danger')) !!}
                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        Las preguntas del examen solo pueden ser creadas por un administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection