@extends('layouts.app')

@section('title', 'Opciones de Preguntas')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Panel Principal - Opciones de Pregunta.- <b>{{strtoupper($question->question) }}</b> del examen <b>{{ strtoupper($question->quiz->title) }}</b>.
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <table class="table table-bordered table-striped dt-select">
                                    <thead>
                                    <tr>
                                        <th>Preguntas</th>
                                        <th>
                                            <a href="{{ route('questionOptions.create', $question) }}" class="btn btn-success">Nueva Opción</a>
                                            <a href="{{ route('questions.index', [$question->quiz]) }}" class="btn btn-info"><i class="fas fa-arrow-left"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($question->options as $option)
                                        <tr data-entry-id="{{ $option->id }}">
                                            <td>{{ $option->option }}</td>
                                            <td>
                                                <a href="{{ route('questionOptions.edit',$option) }}" class="btn btn-sm btn-outline-info">editar</a>
                                                {!! Form::open(array(
                                                    'style' => 'display: inline-block;',
                                                    'method' => 'DELETE',
                                                    'onsubmit' => "return confirm('¿Estas seguro de querer borrar la opción?');",
                                                    'route' => ['questionOptions.destroy', $option->id])) !!}
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
                        Las opciones de las preguntas del examen solo pueden ser creadas por un administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection