@extends('layouts.app')

@section('title', 'Examenes')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Exámenes.</div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <table class="table table-bordered table-striped {{ count(auth()->user()->quizzes()->get()) > 0 ? 'datatable' : '' }} dt-select">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Diplomado</th>
                                            <th>Finalización</th>
                                            <th>Calificación</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($quizzesPending as $quiz)
                                        <tr>
                                            <td>{{ $quiz->title }}</td>
                                            <td>{{ $quiz->course->short_name }}</td>
                                            <td>{{ $quiz->formattedEnd }}</td>
                                            @if($quiz->end < \Carbon\Carbon::now())
                                                <td class="table-danger">
                                                    <a href="#" class="btn btn-sm btn-outline-danger disabled">Tiempo agotado</a>
                                                </td>
                                                @else
                                                <td class="table-secondary">
                                                    <div class="alert alert-warning" role="alert">
                                                        Al iniciar tú examen solo dispondrás del tiempo previsto para contestarlo, por favor solo da click si dispones de tiempo <a href="{{ route('quizzes.answer',$quiz) }}" class="btn btn-danger">Contestar examen</a>.
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach

                                    @forelse (auth()->user()->quizzes()->get() as $quiz)
                                        <tr data-entry-id="{{ $quiz->id }}">
                                            <td>{{ $quiz->title }}</td>
                                            <td>{{ $quiz->course->short_name }}</td>
                                            <td class="{{ $quiz->correctDate ? "" : "table-danger" }}">{{ $quiz->formattedEnd }}</td>
                                            @if($quiz->pivot->score != 0)
                                                <td class="table-success">
                                                    Tu calificación es: <b>{{ $quiz->pivot->score }}</b>
                                                </td>
                                            @else
                                                <td class="table-warning">
                                                    <a href="{{ route('quizzes.answer', $quiz) }}" class="btn btn-sm btn-danger">Contestar</a>
                                                </td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No existen Exámenes para contestar</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        Los exámenes solo pueden ser creados por un administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection