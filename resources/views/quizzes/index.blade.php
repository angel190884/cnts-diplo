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
                                            <th><a href="{{ route('quizzes.create') }}" class="btn btn-success">Nuevo Examen</a></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @if (count($quizzes) > 0)
                                        @foreach ($quizzes as $quiz)
                                            <tr data-entry-id="{{ $quiz->id }}">
                                                <td>{{ $quiz->title }}</td>
                                                <td>{{ $quiz->course->short_name }}</td>
                                                <td>
                                                    <a href="{{ route('quizzes.show',[$quiz->id]) }}" class="btn btn-sm btn-outline-primary">detalles</a>
                                                    <a href="{{ route('quizzes.edit',[$quiz->id]) }}" class="btn btn-sm btn-outline-info">editar</a>
                                                    <a href="{{ route('questions.index',[$quiz->id]) }}" class="btn btn-sm btn-outline-secondary">preguntas</a>
                                                    {!! Form::open(array(
                                                        'style' => 'display: inline-block;',
                                                        'method' => 'DELETE',
                                                        'onsubmit' => "return confirm('¿Estas seguro de querer borrar el examen?');",
                                                        'route' => ['quizzes.destroy', $quiz->id])) !!}
                                                    {!! Form::submit('borrar', array('class' => 'btn btn-sm btn-danger')) !!}
                                                    {!! Form::close() !!}
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
                </div>
            </div>
        </div>
    </div>
@endsection