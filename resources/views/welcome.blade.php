<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Centro Nacional de Transfusión Sanguinea - Cursos, Diplomados">
        <meta name="author" content="adx software">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{{ Storage::url('images/favicon.png') }}}" />
        <title>Diplomado CNTS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="body">
        <div id="app">

        </div>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <img class="card-img-top" style="height: 75px; width: 75px; display: block;" src="{{ Storage::url('images/favicon.png') }}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#instituciones">Instituciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#what-we-do">Características</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-md-0">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link mt-2 mt-md-0" href="{{ url('/home') }}">
                                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">tablero</button>
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link mt-2 mt-md-0" href="{{ route('login') }}">
                                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Ingresar</button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mt-2 mt-md-0" href="{{ route('register') }}">
                                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Registrarse</button>
                                    </a>
                                </li>
                            @endauth
                        @endif

                    </ul>
                </div>
            </nav>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ Storage::url('images/home_1_slider_1.jpg') }}" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Diplomado "Sangre y Componentes Seguros"</h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-danger" href="#diplomado" role="button">Guía de Inscripción</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Storage::url('images/home_1_slider_2.jpg') }}" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Requisitos para poder inscribirte en el Diplomado</h1>
                                <p>Para poder ingresar deberás cumplir con algunos requisitos mínimos para que seas considerado en la inscripción.</p>
                                <p><a class="btn btn-lg btn-danger" href="#requisitos" role="button">Requisitos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <section>
            <article>
                <div class="container-fluid bg-light text-center py-5">
                    <h2 class="section-title mb-2 h1">Inscribete</h2>
                    <p class="text-center text-muted h5">Sigue estos pasos para poder inscribirte e ingresar al diplomado:</p>
                    <div class="row">
                        <div class="col-sm-12 col-md-2 offset-md-2 col-sm-3">
                            <h3>1.-Registrate</h3>
                             <span style="color: red;"><i class="far fa-user fa-8x"></i></span>
                        </div>
                        <div class="col-sm-12 col-md-2 col-sm-3">
                            <h3>2.-Llena tus datos</h3>
                            <span style="color: red;"><i class="fas fa-address-card fa-8x"></i></span>
                        </div>
                        <div class="col-sm-12 col-md-2 col-sm-3">
                            <h3>3.-Confirma</h3>
                            <span style="color: red;"><i class="fas fa-envelope fa-8x"></i></span>
                        </div>
                        <div class="col-sm-12 col-md-2 col-sm-3">
                            <h3>4.-Ingresa</h3>
                            <span style="color: red;"><i class="fas fa-user fa-8x"></i></span>
                        </div>
                    </div>
                </div>
            </article>
            <article id="instituciones">
                <div class="container-fluid main">
                    <div class="py-5 bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="section-title mb-2 h1">Instituciones que avalan el Diplomado</h2>
                                    <hr>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow p-1">
                                        <div style="height: 225px; width: 100%; display: block;">
                                            <img class="card-img-top" alt="unam" src="{{ Storage::url('images/unam.png') }}">
                                        </div>
                                        <div class="card-body">
                                            <h3><strong>UNAM</strong></h3>
                                            <p class="text-"><em><small>Universidad Nacional Autónoma de México</small></em></p>
                                            <p class="card-text">Es una universidad pública de investigación en México. Ocupa un lugar destacado en el ranking mundial basado en la extensa investigación e innovación de la universidad.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="https://www.unam.mx/" type="button" class="btn btn-sm btn-outline-secondary">sitio</a>
                                                    <a href="https://www.facebook.com/UNAM.MX.Oficial" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-facebook-square"></i></a>
                                                    <a href="https://twitter.com/unam_mx" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-twitter-square"></i></a>
                                                    <a href="https://www.instagram.com/unam_mx/" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow p-1">
                                        <div style="height: 225px; width: 100%; display: block;">
                                            <img class="card-img-top" alt="oms" src="{{ Storage::url('images/oms.png') }}">
                                        </div>
                                        <div class="card-body">
                                            <h3><strong>OMS</strong></h3>
                                            <p class="text-"><em><small>Organización Mundial de la Salud</small></em></p>
                                            <p class="card-text">La OMS considera que todo país debe disponer de sangre y componentes seguros, accesibles a costos razonables y acordes con las demandas nacionales.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="https://www.who.int/es" type="button" class="btn btn-sm btn-outline-secondary">sitio</a>
                                                    <a href="https://www.facebook.com/WHO" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-facebook-square"></i></a>
                                                    <a href="https://twitter.com/WHO" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-twitter-square"></i></a>
                                                    <a href="https://www.instagram.com/who/" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow p-1">
                                        <div style="height: 225px; width: 100%; display: block;">
                                            <img class="card-img-top" alt="oms" src="{{ Storage::url('images/logo-paho.png') }}" style="height: 225px; width: 100%; display: block;">
                                        </div>
                                        <div class="card-body">
                                            <h3><strong>PAHO</strong></h3>
                                            <p class="text-"><em><small>Organización Panamericana de la Salud</small></em></p>
                                            <p class="card-text">Es una agencia de salud pública de carácter internacional que trabaja para mejorar la salud y el nivel de vida de todos los pueblos de las Américas.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="https://www.paho.org/mex/" type="button" class="btn btn-sm btn-outline-secondary">sitio</a>
                                                    <a href="https://www.facebook.com/PAHOWHO" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-facebook-square"></i></a>
                                                    <a href="https://twitter.com/OPSOMSMexico/" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-twitter-square"></i></a>
                                                    <a href="https://www.instagram.com/opspaho/" type="button" class="btn btn-sm btn-outline-secondary"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="what-we-do" class="bg-light px-5">
                <div class="container px-5">
                    <h2 class="section-title mb-2 h1">Que puedes hacer en el diplomado</h2>
                    <p class="text-center text-muted h5">Acciones que podrás realizar dentro del sistema del diplomado una vez que seas aceptado y lo estes cursando.</p>
                    <div class="row mt-5">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="fas fa-cloud-upload-alt fa-2x before"></i>
                                <div class="card-block">
                                    <h3 class="card-title">Subir actividades</h3>
                                    <p class="card-text">Podrás subir tus actividades en formato PDF directamente sin tener que enviar todo por emails.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before fas fa-comments fa-2x"></i>
                                <div class="card-block block-2">
                                    <h3 class="card-title">Foros</h3>
                                    <p class="card-text">Tendremos foros para la discusion de los temas a tratar. Asi como de temas creados por el Profesor.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before fas fa-user-circle fa-2x"></i>
                                <div class="card-block block-3">
                                    <h3 class="card-title">Perfil</h3>
                                    <p class="card-text">Tendrás un perfil, y la sensación de que no estas a la distancia, mucha interacción con el Profesor.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before fas fa-file-pdf fa-2x"></i>
                                <div class="card-block block-4">
                                    <h3 class="card-title">Contenido disponible</h3>
                                    <p class="card-text">Tendremos el contenido disponible para tu perfil, y asi puedas repasar algún tema para los exámenes.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before far fa-id-badge fa-2x"></i>
                                <div class="card-block block-5">
                                    <h3 class="card-title">Información de Contacto</h3>
                                    <p class="card-text">Tendrás a la mano información de tus profesores para poder contactarlos.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before far fa-star fa-2x"></i>
                                <div class="card-block block-6">
                                    <h3 class="card-title">Calificaciones siempre visibles</h3>
                                    <p class="card-text">Podras en todo momento saber tu calificación de las actividades y foros.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="bg-light py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- About -->
                            <section>
                                <h2><span>Contenido del Diplomado</span></h2>
                                <ul>
                                    <li>Módulo Introductorio.</li>
                                    <li>Módulo I Donación de Sangre Segura.</li>
                                    <li>Módulo II Tamizaje de VIH y otros Agentes Infecciosos.</li>
                                    <li>Módulo III Grupos Sanguíneos.</li>
                                </ul>
                                <p>
                                    <small>
                                        Cupo: de 20 a 40 como máximo. Costos: $ por definir (Mil quinientos pesos 00/100 M.N.).
                                    </small>
                                </p>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section>
                                <div class="container-fluid card">
                                    <div style="height: 200px; width: 100%; display: block;">
                                        <img class="card-img-top" alt="oms" src="{{ Storage::url('images/cnts.png') }}">
                                    </div>
                                    <div class="card-body py-0 m-0">
                                        <h2>CNTS</h2>
                                        <small>Centro Nacional de la Transfusión Sanguínea.</small>
                                        <p>Es el encargado de gestionar el contenido de este diplomado.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <footer id="footer">
            <section class="footer-widget-area footer-widget-area-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <hr>
                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>E-mail</h3>
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show bg-danger">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <p class="text-lg-left">
                                                    ¡¡¡ Se han encontrado algunos errores favor de solucionarlos antes de poder continuar !!!
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                </p>
                                            </div>
                                        @endif
                                        @if(Session::has('successSendMessage'))
                                            <div class="alert alert-success alert-dismissible fade show bg-spotify">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <p class="text-lg-left">
                                                    {{ Session::get("successSendMessage") }}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="footer-subscription">
                                        <form method="POST" action="{{ route('sendMessage') }}">
                                            @csrf
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
                                            @endif

                                            <label for="message"></label><textarea id="message" type="text" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" required rows="5"></textarea>
                                            @if ($errors->has('message'))
                                                <span class="invalid-feedback"><strong>{{ $errors->first('message') }}</strong></span>
                                            @endif
                                            <br>
                                            <button type="submit" class="btn btn-danger">
                                                Enviar Dudas!!!
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!--  end .col-md-4 col-sm-12 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <hr>
                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Contacto:</h3>
                                    </div>  <!--  end .footer-widget-header -->
                                    <div>
                                        <p><i class="fas fa-envelope-open fa-2x"></i> email:<br>
                                            <a href="#">cntscursos@gmail.com</a><br/></p>
                                        <p><i class="fas fa-location-arrow fa-2x"></i>dirección:<br>
                                            Othón de Mendizabal 195,Col. Zacatenco,<br/> CDMX. C.P. 07360</p>
                                        <p><i class="fas fa-phone fa-2x"></i> telefonos:<br>
                                            Office:&nbsp; (55) 63-92-22-50<br/>Ext:&nbsp; 51648, 51691, 51696 </p>
                                    </div>
                                </div> <!-- end .footer-widget-wrapper  -->
                            </div> <!--  end .footer-widget  -->
                        </div> <!--  end .col-md-4 col-sm-12 -->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <hr>
                            <div class="footer-widget clearfix">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Enlaces Relacionados</h3>
                                    </div>  <!--  end .footer-widget-header -->
                                    <ul class="footer-useful-links">
                                        <li>
                                            <a href="https://www.gob.mx/">
                                                <i class="fa fa-caret-right"></i>
                                                gob.mx
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gob.mx/salud">
                                                <i class="fa fa-caret-right"></i>
                                                Secretaria de Salud
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gob.mx/cnts">
                                                <i class="fa fa-caret-right"></i>
                                                CNTS
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gob.mx/cofepris/">
                                                <i class="fa fa-caret-right"></i>
                                                Cofepris
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gob.mx/cenam/">
                                                <i class="fa fa-caret-right"></i>
                                                Cenam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gob.mx/cenatra">
                                                <i class="fa fa-caret-right"></i>
                                                Cenatra
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://consultapublicamx.inai.org.mx/vut-web/?idSujetoObigadoParametro=10021&idEntidadParametro=33&idSectorParametro=21">
                                                <i class="fa fa-caret-right"></i>
                                                Portal de Obligaciones de Transparencia (SIPOT)
                                            </a>
                                        </li>
                                    </ul>
                                </div> <!--  end .footer-widget  -->
                            </div> <!--  end .footer-widget  -->
                        </div> <!--  end .col-md-4 col-sm-12 -->
                    </div> <!-- end row  -->
                </div> <!-- end .container  -->
            </section> <!--  end .footer-widget-area  -->
            <!--FOOTER CONTENT  -->
            <section class="footer-contents text-center">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12">
                            <p class="copyright-text"> Copyright © 2018, Todos los derechos reservados por el <a href="https://www.gob.mx/cnts" alt="Centro Nacional de la Transfusión Sanguínea">CNTS</a></p>
                            <p class="copyright-text text-sm-center"></p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
