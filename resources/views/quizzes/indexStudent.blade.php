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
                                <table class="table table-bordered table-striped {{ count(auth()->user()->quizzes()->get()) > 0 ? 'datatable' : '' }} dt-select">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Diplomado</th>
                                            <th>Finalización</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @if (count(auth()->user()->quizzes()->get()) > 0)
                                        @foreach (auth()->user()->quizzes()->get() as $quiz)
                                            <tr data-entry-id="{{ $quiz->id }}">
                                                <td>{{ $quiz->title }}</td>
                                                <td>{{ $quiz->course->short_name }}</td>
                                                <td>{{ $quiz->formattedEnd }}</td>
                                                <td>
                                                    @if($quiz->end < \Carbon\Carbon::now())
                                                        <a href="#" class="btn btn-sm btn-outline-danger disabled">Tiempo agotado</a>
                                                    @else
                                                        @if($quiz->pivot->score != 0)
                                                            <a href="#" class="btn btn-sm btn-outline-success disabled">¡Contestado!</a>
                                                        @else
                                                            <a href="#" class="btn btn-sm btn-outline-info">Contestar</a>
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">No existen Examenes para contestar</td>
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