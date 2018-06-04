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
                        <embed src="{{ Storage::url("content/1-1-1.pdf#toolbar=0") }}" type='application/pdf' class="container-fluid" height="825">
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
            <!-- Description -->
            <div class="col-12">
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Descripción</div>
                    <div class="card-body">
                        <p class="card-text">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                        </p>
                        <p class="card-text">
                            Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reviews -->
            <div class="col-12" id="reviews">
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase">
                        <div class="text-left">
                            <i class="fa fa-comment"></i>Foro de preguntas <a class="btn-sm btn-info" href="{{ route('showContent',$topic->slug)}}"><i class="fa fa-sync-alt"></i></a>
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