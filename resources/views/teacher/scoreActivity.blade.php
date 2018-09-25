@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 text-left">
                                Calificaciones de Actividad: ( <strong>{{ $activity->name }}</strong> )
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover text-center">
                                <thead class="thead-dark">
                                <tr>
                                    <th colspan="13">ACTIVIDADES</th>
                                </tr>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Célular</th>
                                    <th scope="col">Institución</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Calificación</th>
                                    <th scope="col">Editar</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach ($activity->users as $user)
                                    <tr>
                                        <td class="text-left">
                                            <img src="{{ Storage::url($user->avatar) }}" class="img-fluid img-thumbnail rounded" width="75">
                                            {{ $user->full_name }}
                                        </td>
                                        <td class="align-middle">{{ $user->telefono }}</td>
                                        <td class="align-middle">{{ $user->celular }}</td>
                                        <td class="align-middle">{{ $user->trabajo_inst }}</td>
                                        <td class="align-middle">{{ $user->cargo }}</td>
                                        <td class="align-middle">
                                            @if($user->pivot->file_activity)
                                                <a href="{{ Storage::url($user->pivot->file_activity) }}" target="_blank" style="color:darkred">
                                                    <i class="fas fa-2x fa-file-pdf"></i>
                                                </a>
                                            @else
                                                <div style="font-size:2em; color:gray">
                                                    <i class="fas fa-minus"></i>
                                                </div>
                                            @endif

                                        </td>
                                        <td class="align-middle text-info text-lg-center">
                                            @if($user->pivot->score==5||$user->pivot->score==0)
                                                <p style="font-size: large; color:red">{{ $user->pivot->score }}</p>
                                            @else
                                                <p style="font-size: large; color:green">{{ $user->pivot->score }}</p>
                                            @endif
                                        </td>
                                        <td class="align-middle text-info text-lg-center">
                                            @if($user->pivot->file_activity)
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#{{ $user->remember_token }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="{{$user->remember_token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            {{Form::model($user,['route' => ['changeScoreActivity',$user->id]])}}
                                                            {{Form::hidden('activity_id', $user->pivot->activity_id)}}
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="{{ $user->pivot->file_activity }}Label">{{ $user->full_name }}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {{Form::select(
                                                                        'score', ['5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10'],
                                                                        $user->pivot->score,
                                                                        ['placeholder' => 'Selecciona una Calificación',
                                                                         'class' => 'form-control'])}}
                                                                    <br>
                                                                    <br>
                                                                    <p class="alert-warning">Debes calificar al alumno para que no afecte su promedio ya que si no seleccionas ninguna calificación contara como "cero" puntos y no como una calificación minima de 5.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Calificar</button>
                                                                </div>
                                                            </div>
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                            @else
                                                <div style="font-size:2em;color: gray">
                                                    <i class="fas fa-ban"></i>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        score actividades
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop