@extends('layouts.app')

@section('title', 'Examenes')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Examenes.</div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <h1>{{ $questions }}</h1>
                                    Preguntas en la BD
                                </div>
                                <div class="col-md-3 text-center">
                                    <h1>{{ $users }}</h1>
                                    Usuarios Registrados
                                </div>
                                <div class="col-md-3 text-center">
                                    <h1>{{ $quizzes->count() }}</h1>
                                    Examenes
                                </div>
                                <div class="col-md-3 text-center">
                                    <h1>{{ number_format($average, 2) }} / 10</h1>
                                    Promedio General
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <table class="table table-bordered table-striped {{ count($quizzes) > 0 ? 'datatable' : '' }} dt-select">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Diplomado</th>
                                            <th>
                                                <a href="{{ route('quizzes.create') }}" class="btn btn-success">Nuevo Examen</a>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @if (count($quizzes) > 0)
                                        @foreach ($quizzes as $quiz)
                                            <tr data-entry-id="{{ $quiz->id }}">
                                                <td>{{ $quiz->title }}</td>
                                                <td>{{ $quiz->course->short_name }}</td>
                                                <td>
                                                    <a href="{{ route('quizzes.edit',$quiz) }}" class="btn btn-sm btn-outline-info">editar</a>
                                                    <a href="{{ route('questions.index',$quiz) }}" class="btn btn-sm btn-outline-secondary">preguntas</a>
                                                    @if($quiz->published == 1)
                                                        <a href="{{ route('quizzes.disable',$quiz) }}" class="btn btn-sm btn-outline-danger">Quitar publicación</a>
                                                    @else
                                                        <a href="{{ route('quizzes.publish',$quiz) }}" class="btn btn-sm btn-outline-secondary">publicar</a>
                                                    @endif

                                                    @if(!$quiz->published)
                                                        {!! Form::open(array(
                                                        'style' => 'display: inline-block;',
                                                        'method' => 'DELETE',
                                                        'onsubmit' => "return confirm('¿Estas seguro de querer borrar el examen?');",
                                                        'route' => ['quizzes.destroy', $quiz])) !!}
                                                        {!! Form::submit('borrar', array('class' => 'btn btn-sm btn-danger')) !!}
                                                        {!! Form::close() !!}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">No existen Examenes</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        Los examenes solo pueden ser creados por un administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection