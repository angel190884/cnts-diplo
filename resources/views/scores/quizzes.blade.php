@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Calificaciones de Examenes</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            <tr class="bg-dark">
                                <th>id</th>
                                <th>examen</th>
                                <th>alumno</th>
                                <th>generación</th>
                                <th>calificación</th>
                            </tr>
                            @foreach($attempts as $attempt)
                                <tr>
                                    <td>{{ $attempt->id }}</td>
                                    <td>{{ $attempt->quiz->title }}</td>
                                    <td>{{ $attempt->user['fullName'] }}</td>
                                    <td>{{ $attempt->user['course']['short_name'] }}</td>
                                    <td>{{ $attempt->score }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop