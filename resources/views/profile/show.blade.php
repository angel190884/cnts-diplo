@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <table class="table table-sm table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th colspan="6">DATOS GENERALES DEL USUARIO</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted">Foto</td>
                            <th colspan="6"><img class="d-block mx-auto" src="{{ Storage::url($user->avatar) }}" alt="" width="100" height="100"></th>
                        </tr>
                        <tr>
                            <td class="text-muted">Nombre</td>
                            <th colspan="6">{{ $user->fullName }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted">Email</td>
                            <th colspan="6"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></th>
                        </tr>
                        <tr>
                            <td class="text-muted">CURP</td>
                            <th>{{ $user->curp }}</th>
                            <td class="text-muted">RFC</td>
                            <th>{{ $user->rfc }}</th>
                            <td class="text-muted">Homoclave</td>
                            <th>{{ $user->homoclave }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted">Dirección</td>
                            <th colspan="6">{{ $user->address }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted">Teléfono</td>
                            <th>{{ $user->telefono ? $user->telefono : '---' }}</th>
                            <td class="text-muted">Celular</td>
                            <th>{{ $user->celular ? $user->celular : '---' }}</th>
                            <td class="text-muted">Fax</td>
                            <th>{{ $user->fax ? $user->celular : '---' }}</th>
                        </tr>
                        <tr>
                            <td rowspan="2" class="text-muted align-middle">Datos Profesionales</td>
                            <td class="text-muted">Título</td>
                            <th colspan="2">{{ $user->titulo }}</th>
                            <td class="text-muted">Cedula</td>
                            <th>{{ $user->celula }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted">Institución</td>
                            <th colspan="2">{{ $user->institucion }}</th>
                            <td class="text-muted">Fecha de Examen</td>
                            <th>{{ $user->date_examen_profesional }}</th>
                        </tr>
                        <tr>
                            <td rowspan="3" class="text-muted align-middle">Posgrados</td>
                            <td class="text-muted">Especialidad</td>
                            <th colspan="2">{{ $user->especialidad ? $user->especialidad : '---' }}</th>
                            <td class="text-muted">Institución</td>
                            <th>{{ $user->especialidad_inst ? $user->especialidad_inst : '---' }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted">Maestria</td>
                            <th colspan="2">{{ $user->maestria ? $user->maestria : '---' }}</th>
                            <td class="text-muted">Institución</td>
                            <th>{{ $user->maestria_inst ? $user->maestria_inst : '---' }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted">Doctorado</td>
                            <th colspan="2">{{ $user->doctorado ? $user->doctorado : '---' }}</th>
                            <td class="text-muted">Institución</td>
                            <th>{{ $user->doctorado_inst ? $user->doctorado_inst : '---' }}</th>
                        </tr>
                        <tr>
                            <td class="text-muted align-middle">Datos Laborales</td>
                            <td class="text-muted">Cargo</td>
                            <th colspan="2">{{ $user->cargo ? $user->cargo : '---' }}</th>
                            <td class="text-muted">Institución</td>
                            <th>{{ $user->trabajo_inst ? $user->trabajo_inst : '---' }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('authenticated.index') }}">
                    <i class="fas fa-undo"></i> Regresar
                </a>

                @if($user->hasRole('authenticated'))
                    <a  class="btn btn-warning" href="#" data-toggle="modal" data-target="#modalVoucher">
                        <i class="fas fa-upload"></i> Voucher
                    </a>
                    @include('profile.modals.modalUploadVoucher')
                    <a  class="btn btn-success" href="#" data-toggle="modal" data-target="#modalAccept">
                        <i class="far fa-check-circle"></i> Aceptar
                    </a>
                    @include('profile.modals.modalAcceptUserAuthenticated')
                    <a  class="btn btn-danger" href="#" data-toggle="modal" data-target="#modalRefuse">
                        <i class="fas fa-ban"></i> Rechazar
                    </a>
                    @include('profile.modals.modalRefuseUserAuthenticated')
                @endif
                @if($user->hasRole('student'))
                    <a  class="btn btn-warning" href="#" data-toggle="modal" data-target="#modalSendEmail">
                        <i class="fas fa-envelope"></i> Enviar e-mail
                    </a>
                @endif
            </div>
        </div>
    </div>
@stop