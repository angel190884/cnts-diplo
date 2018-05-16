@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 text-left">
                                Panel Principal - Usuarios que solicitaron ingresar a algún diplomado.( <strong>{{ $users->total() }} resultados</strong> )
                            </div>
                            <div class="col-sm-12 col-md-12 text-left">
                                {{ Form::open(['route' => 'authenticated.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                    <label class="sr-only" for="grupoNombre">Usuario</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                                        </div>
                                        {{ Form::text('full_name',$full_name, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'grupoNombre']) }}
                                    </div>

                                    <label class="sr-only" for="grupoEmail">Email</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                                        </div>
                                        {{ Form::text('email',$email, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'grupoEmail']) }}
                                    </div>

                                    <label class="sr-only" for="grupoDiplomado">Diplomado</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                        </div>
                                        {{ Form::select('course', $courses, $course, ['placeholder' => 'Selecciona un Diplomado...', 'class' => 'form-control', 'id' => 'grupoDiplomado']) }}
                                    </div>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-money-bill-alt"></i></div>
                                        </div>
                                        <div class="form-control">
                                            {{ Form::checkbox('voucher_send', $voucher_send, $voucher_send) }}
                                        </div>

                                    </div>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-hand-holding-usd"></i></div>
                                        </div>
                                        <div class="form-control">
                                            {{ Form::checkbox('paid', $paid, $paid) }}
                                        </div>

                                    </div>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th colspan="13">LISTA DE USUARIOS AUTENTICADOS EN EL SISTEMA SOLICITANDO INGRESAR AL DIPLOMADO</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Nombre Completo</th>
                                        <th scope="col"><i class="far fa-envelope"></i> email</th>
                                        <th scope="col"><i class="far fa-calendar-check"></i> F. inscripción (dd-mm-aaaa) </th>
                                        <th scope="col"><i class="fas fa-location-arrow"></i> entidad</th>
                                        <th scope="col"><i class="fas fa-calendar-alt"></i> diplomado</th>
                                        <th scope="col"><i class="fas fa-id-card"></i></th>
                                        <th scope="col"><i class="fas fa-id-badge"></i></th>
                                        <th scope="col"><i class="fas fa-file-alt"></i></th>
                                        <th scope="col"><i class="far fa-money-bill-alt"></i></th>
                                        <th scope="col"><i class="fas fa-hand-holding-usd"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <th scope="row"><a href="{{ route('profile.show',$user->id) }}">{{ $user->id }}</a></th>
                                        <td>{{ $user->fullName }}</td>
                                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                        <td>{{ $user->dateInscriptionFormatBasic }}</td>
                                        <td>{{ $user->entidad }}</td>
                                        <td>{{ $user->course['short_name'] }}</td>
                                        <td>@if($user->file_cedula)<a href="{{ Storage::url($user->file_cedula) }}" target="_blank"><i class="fas fa-id-card"></i></a>@endif</td>
                                        <td>@if($user->file_titulo)<a href="{{ Storage::url($user->file_titulo) }}" target="_blank"><i class="fas fa-id-badge"></i></a>@endif</td>
                                        <td>@if($user->file_carta)<a href="{{ Storage::url($user->file_carta) }}" target="_blank"><i class="fas fa-file-alt"></i></a>@endif</td>
                                        <td>@if($user->file_voucher)<a href="{{ Storage::url($user->file_voucher) }}" target="_blank"><i class="fas fa-money-bill-alt"></i></a>@endif</td>
                                        <td>@if($user->file_paid_voucher)<a href="{{ Storage::url($user->file_paid_voucher) }}" target="_blank"><i class="fas fa-money-bill-alt btn-success"></i></a>@endif</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $users->appends([
                                            'full_name' => $full_name,
                                            'email' => $email,
                                            'course' => $course
                                            ])->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection