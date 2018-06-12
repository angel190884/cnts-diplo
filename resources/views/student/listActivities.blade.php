@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Actividades del usuario: <strong>{{ auth()->user()->fullName }}</strong></div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark">
                                <tr>
                                    <th colspan="10">DIPLOMADOS</th>
                                </tr>
                                <tr>
                                    <th scope="col">#Actividad</th>
                                    <th scope="col">Capitulo</th>
                                    <th scope="col">Sub Capitulo</th>
                                    <th scope="col">Tema</th>
                                    <th scope="col">Enlace</th>
                                    <th scope="col">Calificacón</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td scope="row">{{ $activity->number_activity }}</td>
                                        <td>{{ $activity->topic->submodule->module->name }}</td>
                                        <td>{{ $activity->topic->submodule->name }}</td>
                                        <td>{{ $activity->topic->name }}</td>
                                        @if($activity->pivot->file_activity == null)
                                            <td>---</td>
                                        @else
                                            <td>
                                                <a href="{{ Storage::url($activity->pivot->file_activity) }}" target="_blank">Ver Actividad</a>

                                            </td>
                                        @endif
                                        <td>{{ $activity->pivot->score }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        estas son todas lac actividades
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop