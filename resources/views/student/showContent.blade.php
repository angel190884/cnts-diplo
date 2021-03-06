@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ $topic->submodule->module->name }}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $topic->submodule->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $topic->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- PDF -->
            <div class="col-12 col-lg-8">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <embed src="{{ Storage::url($topic->file_topic) }}" type='application/pdf' class="container-fluid" height="900">
                    </div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="col-12 col-lg-4 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase">
                        @if(blank($topic->activities))
                            Sin Actividades
                        @else
                            Actividades
                        @endif
                    </div>
                    <div class="card-body">
                        @if(blank($topic->activities))
                            ninguna
                        @else
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    @foreach($topic->activities as $activity)

                                        <p>
                                            <strong>{{ $activity->name }}</strong>.- {{ $activity->description }}

                                            @role('student')
                                                @if($activity->users()->where('user_id','=',auth()->user()->id)->first()->pivot->file_activity)
                                                    <a href="{{ Storage::url($activity->users()->where('user_id','=',auth()->user()->id)->first()->pivot->file_activity) }}" title="ver pdf subido anteriormente" target="_blank"><i class="fas fa-eye"></i>Ver</a>
                                                @else
                                                    <a href="#" title="subir PDF" data-toggle="modal" data-target="{{ "#modalActivity-" . $activity->id }}"><i class="fas fa-upload"></i>Subir</a>
                                                @endif
                                            @endrole
                                            <div class="modal fade" id="{{ "modalActivity-" . $activity->id }}" tabindex="-1" role="dialog" aria-labelledby="ImgLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        {{ Form::model($activity, ['route' => ['u_activity', $activity->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                                                        <div class="modal-header">
                                                            <h5 class="modal-activity" id="activityLabel">Subir Actividad</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{ $activity->id }}
                                                            <input  class="btn btn-secondary btn-block" type="file" name="file_activity" accept="application/pdf" />
                                                        </div>
                                                        <div class="modal-footer">
                                                            {{ Form::submit('Subir', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                                                        </div>
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-info text-white text-uppercase">
                        Persona Responsable
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Nombre: {{ $topic->subModule->module->teacher->fullName }}</li>
                            <li>Teléfono: {{ $topic->subModule->module->teacher->telefono }}</li>
                            <li>Cel: {{ $topic->subModule->module->teacher->celular }}</li>
                            <li>e-mail: <a href="mailto:{{ $topic->subModule->module->teacher->email }}">{{ $topic->subModule->module->teacher->email }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-info text-white text-uppercase">
                        Administración del Diplomado
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Office:  (55) 63-92-22-50</li>
                            <li>Ext:  51616, 51619</li>
                            <li>e-mail: <a href="mailto:cntscursos@gmail.com">cntscursos@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Reviews -->
            <div class="col-12" id="reviews">
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase">
                        <div class="text-left">
                            <i class="fa fa-comment"></i>Comentarios</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('partials.disqus')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop