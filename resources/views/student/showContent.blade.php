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
                                            @if(Auth::user()->activities->where('id','=',$activity->id)->count() > 0)
                                                <a href="#" title="ver pdf subido con anterioridad"><i class="fas fa-eye"></i></a>
                                            @else
                                                <a href="#" title="subir PDF"><i class="fas fa-upload"></i></a>
                                            @endif
                                            Actividad # {{ $activity->number_activity }}.- {{ $activity->description }}
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
                            <li>Nombre: Profesor</li>
                            <li>Contacto: Telefonos de contacto</li>
                            <li>e-mail: <a href="mailto:example@example.com">mail de contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-info text-white text-uppercase">
                        Administración del Diplomado
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Aide Velazquez</li>
                            <li>Contacto: 55-55-55-55</li>
                            <li>e-mail: <a href="mailto:aideevelazquez@salud.gob.mx">aideevelazquez@salud.gob.mx</a></li>
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
                        @include('layouts.disqus')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop