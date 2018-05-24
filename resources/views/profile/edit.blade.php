@extends('layouts.app')

@section('content')
    <div class="container">
    {{ Form::model($user, ['route' => ['profile.update', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}

        <div class="py-5 text-center">
            <h1>DATOS NECESARIOS PARA PODER INCRIBIRTE</h1>
            <div class="alert alert-info">
                <p>
                    <strong class="bg-warning">Aviso importante:</strong> <small> <i class="fas fa-info-circle"></i> Favor de leer y llenar tus datos generales asi como los 3 archivos que te piden, el "CENTRO NACIONAL DE LA TRANSFUSIÓN SANGUÍNEA" revisará los datos proporcionados, al terminar se te informara la situación de tu solicitud en el diplomado por medio de un e-mail donde se indicaran los pasos a seguir, cualquier duda ponemos a tú disposición los teléfonos 55-55-55-55 con horario de atención de 9:00 a 18:00 hrs.</small>
                </p>
            </div>
            <div>
                <img class="d-block mx-auto" src="{{ Storage::url($user->avatar) }}" alt="" width="100" height="100">
                <p><i class="fas fa-camera"></i><small>cambiar ímagen de perfil <a style="font-size:1em; color:cadetblue" href="#" class="btn-link" data-toggle="modal" data-target="#modalImg">aqui</a></small></p>
                <div class="text-sm-left text-danger">
                    @if ($errors->has('avatar'))
                        {{ $errors->first('avatar') }}
                    @endif
                </div>
            </div>

            <h3>HOLA {{ $user->fullName }}</h3>
        </div>


        <div class="row">
            <div class="col-md-8">
                <h4 class="mb-3">Datos Generales</h4>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre">Nombre(s)</label>
                        {!! Form::text('nombre',$user->name,['class' => 'form-control','placeholder' => 'nombre','id'=>'nombre']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('nombre'))
                                {{ $errors->first('nombre') }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apellido">Apellidos</label>
                        {!! Form::text('apellido',$user->last_name,['class' => 'form-control','placeholder' => 'apellidos','id'=>'apellido']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('apellido'))
                                {{ $errors->first('apellido') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    {!! Form::text('email',$user->email,['class' => 'form-control','type'=> "email",'placeholder' => 'you@example.com','id'=>'email']) !!}
                    <div class="text-sm-left text-danger">
                        @if ($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-5 mb-3">
                        <label for="curp">CURP</label>
                        {!! Form::text('curp',$user->curp,['class' => 'form-control','placeholder' => 'curp', 'id'=> 'curp']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('curp'))
                                {{ $errors->first('curp') }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="rfc">RFC</label>
                        {!! Form::text('rfc',$user->rfc,['class' => 'form-control','placeholder' => 'rfc','id'=>'rfc']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('rfc'))
                                {{ $errors->first('rfc') }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="homoclave">Homoclave</label>
                        {!! Form::text('homoclave',$user->homoclave,['class' => 'form-control','placeholder' => 'homoclave','id'=>'homoclave']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('homoclave'))
                                {{ $errors->first('homoclave') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="calle">Calle y #</label>
                        {!! Form::text('calle',$user->calle,['class' => 'form-control','placeholder' => 'calle','id'=>'calle']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('calle'))
                                {{ $errors->first('calle') }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="colonia">Colonia</label>
                        {!! Form::text('colonia',$user->colonia,['class' => 'form-control','placeholder' => 'colonia','id'=>'colonia']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('colonia'))
                                {{ $errors->first('colonia') }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cp">Cod Postal</label>
                        {!! Form::text('cp',$user->cp,['class' => 'form-control ','placeholder' => 'CP','id'=>'cp']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('cp'))
                                {{ $errors->first('cp') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="municipio">Municipio <span class="text-muted">(Automático)</span></label>
                        {!! Form::text('municipio',$user->municipio,['class' => 'form-control','placeholder' => 'Delegación/Municipio','id'=>'municipio']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('municipio'))
                                {{ $errors->first('municipio') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="entidad">Entidad <span class="text-muted">(Automático)</span></label>
                        {!! Form::text('entidad',$user->entidad,['class' => 'form-control','placeholder' => 'entidad federativa','id'=>'entidad']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('entidad'))
                                {{ $errors->first('entidad') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="telefono">Teléfono <span class="text-muted">(Casa)</span></label>
                        {!! Form::text('telefono',$user->telefono,['class' => 'form-control','placeholder' => 'Tel.-55-55-55-55','id'=>'telefono']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('telefono'))
                                {{ $errors->first('telefono') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="celular">Teléfono <span class="text-muted">(Celular)</span></label>
                        {!! Form::text('celular',$user->celular,['class' => 'form-control','placeholder' => 'Tel.-044 (55) 55-55-55-55','id'=>'celular']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('celular'))
                                {{ $errors->first('celular') }}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="fax">Fax <span class="text-muted">(Fax)</span></label>
                        {!! Form::text('fax',$user->entidad,['class' => 'form-control','placeholder' => 'Fax','id'=>'fax']) !!}
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('fax'))
                                {{ $errors->first('fax') }}
                            @endif
                        </div>
                    </div>
                </div>

                <hr>
                <h4 class="mb-3">Datos Profesionales <span class="text-muted">(Obligatorios)</span></h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="titulo">Título</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Titulo</div>
                            </div>
                            {!! Form::text('titulo',$user->titulo,['class' => 'form-control','placeholder' => 'titulo','id'=>'titulo']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('titulo'))
                                {{ $errors->first('titulo') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="institucion">Institución</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Institución</div>
                            </div>
                            {!! Form::text('institucion',$user->especialidad_inst,['class' => 'form-control','placeholder' => 'institución donde se curso','id'=>'institucion']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('institucion'))
                                {{ $errors->first('institucion') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="cedula"># Cédula</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"># Cédula</div>
                            </div>
                            {!! Form::text('cedula',$user->maestria,['class' => 'form-control','placeholder' => 'cédula','id'=>'cedula']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('cedula'))
                                {{ $errors->first('cedula') }}
                            @endif
                        </div>
                    </div>
                </div>

                <hr>
                <h4 class="mb-3">Datos Profesionales <span class="text-muted">(Opcionales)</span></h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="especialidad">Especialidad</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Especialidad</div>
                            </div>
                            {!! Form::text('especialidad',$user->especialidad,['class' => 'form-control','placeholder' => 'especialidad','id'=>'especialidad']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('especialidad'))
                                {{ $errors->first('especialidad') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="especialidad_inst">Institución</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Institución</div>
                            </div>
                            {!! Form::text('especialidad_inst',$user->especialidad_inst,['class' => 'form-control','placeholder' => 'institución donde se curso','id'=>'especialidad_inst']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('especialidad_inst'))
                                {{ $errors->first('especialidad_inst') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="maestria">Maestria</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Maestria</div>
                            </div>
                            {!! Form::text('maestria',$user->maestria,['class' => 'form-control','placeholder' => 'maestria','id'=>'maestria']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('maestria'))
                                {{ $errors->first('maestria') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="maestria_inst">Institución</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Institución</div>
                            </div>
                            {!! Form::text('maestria_inst',$user->maestria_inst,['class' => 'form-control','placeholder' => 'institución donde se curso','id'=>'maestria_inst']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('maestria_inst'))
                                {{ $errors->first('maestria_inst') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="doctorado">Doctorado</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Doctorado</div>
                            </div>
                            {!! Form::text('doctorado',$user->doctorado,['class' => 'form-control','placeholder' => 'doctorado','id'=>'doctorado']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('doctorado'))
                                {{ $errors->first('doctorado') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="doctorado_inst">Institución</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Institución</div>
                            </div>
                            {!! Form::text('doctorado_inst',$user->doctorado_inst,['class' => 'form-control','placeholder' => 'institución donde se curso','id'=>'doctorado_inst']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('doctorado_inst'))
                                {{ $errors->first('doctorado_inst') }}
                            @endif
                        </div>
                    </div>
                </div>

                <hr>
                <h4 class="mb-3">Datos Laborales <span class="text-muted">(Opcional)</span></h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="cargo">Cargo</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Cargo</div>
                            </div>
                            {!! Form::text('cargo',$user->cargo,['class' => 'form-control','placeholder' => 'cargo','id'=>'cargo']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('cargo'))
                                {{ $errors->first('cargo') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="sr-only" for="trabajo_inst">Institución</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Institución</div>
                            </div>
                            {!! Form::text('trabajo_inst',$user->trabajo_inst,['class' => 'form-control','placeholder' => 'institución actual','id'=>'trabajo_inst']) !!}
                        </div>
                        <div class="text-sm-left text-danger">
                            @if ($errors->has('trabajo_inst'))
                                {{ $errors->first('trabajo_inst') }}
                            @endif
                        </div>
                    </div>
                </div>
                <ul class="list-group mb-3">


                </ul>
                @if($user->curp != null &&
                    $user->rfc !=null &&
                    $user->homoclave !=null &&
                    $user->calle !=null &&
                    $user->colonia !=null &&
                    $user->municipio !=null &&
                    $user->entidad !=null &&
                    $user->cp !=null &&
                    $user->telefono !=null &&
                    $user->titulo !=null &&
                    $user->cedula !=null &&
                    $user->institucion !=null &&
                    $user->file_titulo !=null &&
                    $user->file_cedula !=null &&
                    $user->file_carta !=null)

                    <p class="alert alert-info"><i class="fas fa-info-circle"></i> Todos los datos han sido recibidos y guardados en la base de datos de CNTS por favor selecciona el diplomado en el cual estas solicitando entrar.</p>
                    <li class="list-group-item d-flex justify-content-between">
                        {{ Form::select('course', $courses, null, ['placeholder' => 'Selecciona...', 'class' => 'form-control']) }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <button type="submit" class="btn btn-success btn-lg btn-block">ENVIAR SOLICITUD DE INSCRIPCIÓN</button>
                    </li>
                @else
                    <li class="list-group-item d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar Datos</button>
                    </li>
                @endif

                {{ Form::close() }}

            </div>

            <div class="col-md-4 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Archivos</span>
                    <span class="badge badge-danger badge-pill">Importante!!!</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><strong>título en PDF</strong></h6>
                            @if($user->file_titulo != null)
                                <small class="text-muted"><p>cambiar <a href="#" class="btn-link" data-toggle="modal" data-target="#modalTitulo">aquí</a></p></small>
                                <div class="text-sm-left text-danger">
                                    @if ($errors->has('file_titulo'))
                                        {{ $errors->first('file_titulo') }}
                                    @endif
                                </div>
                            @else
                                <small class="text-muted">necesario en formato PDF</small>
                                <div class="text-sm-left text-danger">
                                    @if ($errors->has('file_titulo'))
                                        {{ $errors->first('file_titulo') }}
                                    @endif
                                </div>
                            @endif
                        </div>
                        <span class="text-muted align-content-center">
                            @if($user->file_titulo != null)
                                <div>
                                    <a href="{{ Storage::url($user->file_titulo) }}" target="_blank" style="font-size:3em; color:darkred">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                </div>
                            @else
                                <div>
                                    <a href="#" style="font-size:3em; color:dodgerblue" data-toggle="modal" data-target="#modalTitulo">
                                        <i class="fas fa-upload"></i>
                                    </a>
                                </div>
                            @endif

                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><strong>cédula en PDF</strong></h6>
                            @if($user->file_cedula != null)
                                <small class="text-muted"><p>cambiar <a href="#" class="btn-link" data-toggle="modal" data-target="#modalCedula">aquí</a></p></small>
                                <div class="text-sm-left text-danger">
                                    @if ($errors->has('file_cedula'))
                                        {{ $errors->first('file_cedula') }}
                                    @endif
                                </div>
                            @else
                                <small class="text-muted">necesario en formato PDF</small>
                                <div class="text-sm-left text-danger">
                                    @if ($errors->has('file_cedula'))
                                        {{ $errors->first('file_cedula') }}
                                    @endif
                                </div>
                            @endif
                        </div>
                        <span class="text-muted">
                            @if($user->file_cedula != null)
                                <div>
                                    <a href="{{ Storage::url($user->file_cedula) }}" target="_blank" style="font-size:3em; color:darkred">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                </div>
                            @else
                                <div>
                                    <a href="#" style="font-size:3em; color:dodgerblue" data-toggle="modal" data-target="#modalCedula">
                                        <i class="fas fa-upload"></i>
                                    </a>
                                </div>
                            @endif
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><strong>carta de Motivos</strong></h6>
                            @if($user->file_carta != null)
                                <small class="text-muted"><p>cambiar <a href="#" class="btn-link" data-toggle="modal" data-target="#modalCarta">aquí</a></p></small>
                                <div class="text-sm-left text-danger">
                                    @if ($errors->has('file_carta'))
                                        {{ $errors->first('file_carta') }}
                                    @endif
                                </div>
                            @else
                                <small class="text-muted">necesario en formato PDF</small>
                                <div class="text-sm-left text-danger">
                                    @if ($errors->has('file_carta'))
                                        {{ $errors->first('file_carta') }}
                                    @endif
                                </div>
                            @endif
                        </div>
                        <span class="text-muted">
                            @if($user->file_carta != null)
                                <div>
                                    <a href="{{ Storage::url($user->file_carta) }}" target="_blank" style="font-size:3em; color:darkred">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                </div>
                            @else
                                <div>
                                    <a href="#" style="font-size:3em; color:dodgerblue" data-toggle="modal" data-target="#modalCarta">
                                        <i class="fas fa-upload"></i>
                                    </a>
                                </div>
                            @endif
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="alert alert-warning">
                            <h6 class="my-0"><strong>Al subir los 3 pdf obligatorios el boton inferior azul cambiara a <i class="bg-success text-dark">_ verde _</i> para que puedas seleccionar el diplomado al que quieres aplicar. </strong></h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Modal TITULO-->
        <div class="modal fade" id="modalTitulo" tabindex="-1" role="dialog" aria-labelledby="tituloLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::model($user, ['route' => ['u_title', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloLabel">Subir PDF Titulo Profesional</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input  class="btn btn-secondary btn-block" type="file" name="file_titulo" accept="application/pdf" />
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
        <!-- Modal CEDULA-->
        <div class="modal fade" id="modalCedula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::model($user, ['route' => ['u_cedula', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                    <div class="modal-header">
                        <h5 class="modal-cedula" id="cedulaLabel">Subir PDF Cédula Profesional</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input  class="btn btn-secondary btn-block" type="file" name="file_cedula" accept="application/pdf" />
                    </div>
                    <div class="modal-footer">
                        {{ Form::submit('Subir', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <!-- Modal CARTA-->
        <div class="modal fade" id="modalCarta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::model($user, ['route' => ['u_carta', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                    <div class="modal-header">
                        <h5 class="modal-carta" id="cartaLabel">Subir PDF Carta de Motivos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input  class="btn btn-secondary btn-block" type="file" name="file_carta" accept="application/pdf" />
                    </div>
                    <div class="modal-footer">
                        {{ Form::submit('Subir', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <!-- Modal IMG-->
        <div class="modal fade" id="modalImg" tabindex="-1" role="dialog" aria-labelledby="ImgLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{ Form::model($user, ['route' => ['u_img', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                    <div class="modal-header">
                        <h5 class="modal-img" id="imgLabel">Cambiar Imagen de Perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input  class="btn btn-secondary btn-block" type="file" name="avatar" accept="image/*" />
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
    </div>
@stop