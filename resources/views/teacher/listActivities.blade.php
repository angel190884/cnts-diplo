@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profesor: <strong>{{ auth()->user()->fullName }}</strong></div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark">
                                <tr>
                                    <th colspan="10">ACTIVIDADES</th>
                                </tr>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Diplomado</th>
                                    <th scope="col">Capitulo</th>
                                    <th scope="col">Sub Capitulo</th>
                                    <th scope="col">Tema</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Calificaciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td scope="row">{{ $activity->number_activity }}</td>
                                        <td>{{ $activity->topic->submodule->module->course->short_name }}</td>
                                        <td>{{ $activity->topic->submodule->module->name }}</td>
                                        <td>{{ $activity->topic->submodule->name }}</td>
                                        <td><a href="{{ route('showContent',$activity->topic->slug)}}">{{ $activity->topic->name }}</a></td>
                                        <td>{{ $activity->name }}</td>
                                        <td><a href="{{ route('scoreActivity',$activity->slug) }}"><i class="fas fa-sort-numeric-up"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        Estas son todas las actividades
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop