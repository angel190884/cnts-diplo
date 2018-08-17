@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Usuario: <strong>{{ auth()->user()->fullName }}</strong></div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark text-center">
                                <tr>
                                    <th colspan="10">ACTIVIDADES</th>
                                </tr>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Capitulo</th>
                                    <th scope="col">Sub Capitulo</th>
                                    <th scope="col">Tema</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Enlace</th>
                                    <th scope="col">Calificación</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td scope="row">{{ $activity->number_activity }}</td>
                                        <td>{{ $activity->topic->submodule->module->name }}</td>
                                        <td>{{ $activity->topic->submodule->name }}</td>
                                        <td><a href="{{ route('showContent',$activity->topic->slug)}}">{{ $activity->topic->name }}</a></td>
                                        <td>{{ $activity->name }}</td>
                                        @if($activity->pivot->file_activity == null)
                                            <td>---</td>
                                        @else
                                            <td>
                                                <a href="{{ Storage::url($activity->pivot->file_activity) }}" target="_blank" style="color: darkred">
                                                    <i class="fas fa-file-pdf"></i>
                                                </a>

                                            </td>
                                        @endif
                                        @if($activity->pivot->score==5)
                                            <td style="font-size: large; color:#ff6166">{{ $activity->pivot->score }}</td>
                                        @elseif($activity->pivot->score==0)
                                            <td style="font-size: large; color:#ff6166"><i class="fab fa-product-hunt"></i></td>
                                        @else
                                            <td style="font-size: large; color:green">{{ $activity->pivot->score }}</td>
                                        @endif
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