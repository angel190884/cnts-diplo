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
                <a  class="btn btn-warning" href="#" data-toggle="modal" data-target="#modalVoucher">
                    <i class="fas fa-upload"></i> Voucher
                </a>
                <a  class="btn btn-success" href="#" data-toggle="modal" data-target="#modalAccept">
                    <i class="far fa-check-circle"></i> Aceptar
                </a>
                <a  class="btn btn-danger" href="#" data-toggle="modal" data-target="#modalRefuse">
                    <i class="fas fa-ban"></i> Rechazar
                </a>
            </div>
        </div>
        <!-- Modal Voucher-->
        <div class="modal fade" id="modalVoucher" tabindex="-1" role="dialog" aria-labelledby="VoucherLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::model($user, ['route' => ['u_voucher', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                    <div class="modal-header">
                        <h5 class="modal-voucher" id="voucherLabel">Subir PDF Vaucher</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input  class="btn btn-secondary btn-block" type="file" name="file_voucher" accept="application/pdf" />
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Subir</button>-->
                        {{ Form::submit('Subir', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <!-- Modal Acept-->
        <div class="modal fade" id="modalAccept" tabindex="-1" role="dialog" aria-labelledby="AcceptLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::open(['route' => ['accept.student', $user->id],'method' => 'GET'])}}
                    <div class="modal-header">
                        <h5 class="modal-accept" id="acceptLabel">Aceptar a usuario como Estudiante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">

                        {{ Form::submit('Aceptar Estudiante', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <!-- Modal Refuse-->
        <div class="modal fade" id="modalRefuse" tabindex="-1" role="dialog" aria-labelledby="RefuseLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::open(['route' => ['refuse.student', $user->id],'method' => 'GET'])}}
                    <div class="modal-header">
                        <h5 class="modal-refuse" id="refuseLabel">Rechazar como Estudiante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::textArea('text_refuse',null,['class' => 'form-control','placeholder' => 'Mensaje a usuario','id'=>'text_refuse']) !!}
                    </div>
                    <div class="modal-footer">

                        {{ Form::submit('Rechazar Estudiante', array('class' => 'btn btn-danger btn-lg btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

    </div>
@stop