<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Centro Nacional de Transfusión Sanguinea - Cursos, Diplomados">
        <meta name="author" content="adx software">
        <link rel="shortcut icon" href="{{{ Storage::url('images/favicon.png') }}}" />
        <title>Diplomado CNTS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            /* Show it is fixed to the top */
            body {
                min-height: 75rem;
                padding-top: 4.5rem;
                padding-bottom: 3rem;
                color: #5a5a5a;
                background: #1a1a1a;

            }
            footer{
                color: #dae0e5;
            }
            .main {
                padding: 0;
                margin-top: 0;
            }
            /* GLOBAL STYLES
-------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
                margin-bottom: 0;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
                bottom: 5rem;
                z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
                height: 27rem;
                background-color: #777;
            }
            .carousel-item > img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 27rem;
            }


            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
                margin-bottom: 1.5rem;
                text-align: center;
            }
            .marketing h2 {
                font-weight: 400;
            }
            .marketing .col-lg-4 p {
                margin-right: .75rem;
                margin-left: .75rem;
            }

            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (min-width: 100em) {
                /* Bump up size of carousel content */
                .carousel-caption p {
                    margin-bottom: 1.25rem;
                    font-size: 1.25rem;
                    line-height: 1.4;
                }
            }
            /***********************************************************************************************/
            /* 12. FOOTER */
            /***********************************************************************************************/
            footer {
                position: relative;
                overflow: hidden;
                color: #FFFFFF;
                margin-top: 0px;
            }
            footer a {
                color: #FFFFFF;
            }
            footer a:hover {
                color: #FE3C47;
            }
            footer p {
                color: #FFFFFF;
            }
            .footer-widget-area {
                padding: 100px 0 80px 0;
                background: #1a1a1a;
                margin: 0;
            }
            .footer-widget-area .footer-subscription input[type="submit"] {
                background: #FE3C47;
                border: 0 solid #CCCCCC;
                color: #FFFFFF;
                height: 42px;
                letter-spacing: 2px;
                margin-top: 6px;
                padding: 0 18px;
                text-transform: uppercase;
            }
            .footer-widget-area .footer-widget-header h3 {
                position: relative;
                font-size: 24px;
                margin-bottom: 24px;
                text-transform: uppercase;
                font-family: 'Dosis', sans-serif;
                letter-spacing: 0.03em;
                font-weight: 500;
                display: inline-block;
                color: #FFFFFF;
            }
            .footer-widget-area .footer-widget-header h3 span {
                font-style: italic;
                color: #000000;
            }
            .footer-widget-area .footer-useful-links {
                list-style:none;
                clear: both;
            }
            .footer-widget-area .footer-useful-links li {
                margin-bottom: 8px;
                width: 50%;
                float: left;
            }
            .footer-widget-area .textwidget p {
                padding-left: 42px;
            }
            .footer-widget-area li {
                line-height: 32px;
            }
            .footer-widget-area-bg {
                background: #1a1a1a;
            }
            .footer-contents {
                background: #1b1b1a;
                border-top: 1px solid #2C2C2C;
                padding: 28px 0 20px 0;
            }
            .social-icons a {
                border: 1px solid #CCCCCC;
                color: #FFFFFF;
                display: inline-block;
                font-size: 15px;
                height: 35px;
                line-height: 33px;
                margin-right: 10px;
                position: relative;
                text-align: center;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
                width: 35px;
                -webkit-border-radius: 0px;
                -moz-border-radius: 0px;
                border-radius: 0px;
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding;
                background-clip: padding-box;
            }
            .social-icons a:hover {
                background: #e6e6e6;
            }
            .footer-nav li {
                display: inline;
                list-style-type: none;
            }
            .footer-nav li a {
                padding: 6px 12px;
                position: relative;
            }
            .footer-nav li a:after {
                content: '';
                position: absolute;
                display: inline-block;
                top: 14px;
                right: 0;
                margin: 0;
                height: 8px;
                width: 1px;
                background: #808080;
            }
            .footer-nav li:last-child a:after {
                content: '';
                position: absolute;
                display: inline-block;
                top: 12px;
                right: 0;
                color: #FE3C47;
                margin: 0;
                height: 8px;
                width: 0px;
                background: #FFFFFF;
            }

            /**********************
/***** Services *******
/*********************/
            section{
                padding: 60px 0;
            }
            section .section-title{
                text-align:center;
                color:#FE3C47;
                margin-bottom:50px;
                text-transform:uppercase;
            }
            #what-we-do{
                background:#ffffff;
            }
            #what-we-do .card{
                padding: 1rem!important;
                border: none;
                margin-bottom:1rem;
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #what-we-do .card:hover{
                -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            }
            #what-we-do .card .card-block{
                padding-left: 50px;
                position: relative;
            }
            #what-we-do .card .before a{
                color: #FE3C47 !important;
                font-weight:700;
                text-decoration:none;
            }
            #what-we-do .card .before a i{
                display:none;

            }
            #what-we-do .card:hover .before a i{
                display:inline-block;
                font-weight:700;

            }
            #what-we-do .card .before{
                position: absolute;
                font-size: 39px;
                color: #FE3C47;
                left: 3px;
                -webkit-transition: -webkit-transform .2s ease-in-out;
                transition:transform .2s ease-in-out;
            }

            #what-we-do .card:hover .before{
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #what-we-do .read-more{
                color: #FE3C47;
            }

        </style>
    </head>
    <body>
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
                                <p>Para poder ingresar deberas cumplir con algunos requisitos minimos para que seas considerado en la inscripción.</p>
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
                        <div class="col-md-2 offset-md-2 col-sm-3">
                            <h3>1.-Registrate</h3>
                             <span style="color: red;"><i class="far fa-user fa-8x"></i></span>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <h3>2.-Llena tus datos</h3>
                            <span style="color: red;"><i class="fas fa-address-card fa-8x"></i></span>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <h3>3.-Confirma</h3>
                            <span style="color: red;"><i class="fas fa-envelope fa-8x"></i></span>
                        </div>
                        <div class="col-md-2 col-sm-3">
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
                                            <p class="card-text">Es una universidad pública de investigación en México . Ocupa un lugar destacado en el ranking mundial basado en la extensa investigación e innovación de la universidad.</p>
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
                                            <p class="card-text">Es una agencia de salud pública de caracter internacional que trabaja para mejorar la salud y el nivel de vida de todos los pueblos de las Américas.</p>
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
                    <p class="text-center text-muted h5">Acciones que podras realizar dentro del sistema del diplomado una vez que seas aceptado y lo estes cursando.</p>
                    <div class="row mt-5">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="fas fa-cloud-upload-alt fa-2x before"></i>
                                <div class="card-block">
                                    <h3 class="card-title">Subir actividades</h3>
                                    <p class="card-text">Podras subir tus actividades en formato PDF directamente sin tener que enviar todo atravez de emails.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before fas fa-comments fa-2x"></i>
                                <div class="card-block block-2">
                                    <h3 class="card-title">Foros</h3>
                                    <p class="card-text">Tendremos foros para la discusion de los temas a tratar. Asi como de temas creados por el Profesor.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before fas fa-user-circle fa-2x"></i>
                                <div class="card-block block-3">
                                    <h3 class="card-title">Perfil</h3>
                                    <p class="card-text">Tendras un perfil, y la sensacion de que no estas a la distancia, mucha interaccion con el Profesor.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before fas fa-file-pdf fa-2x"></i>
                                <div class="card-block block-4">
                                    <h3 class="card-title">Contenido disponible</h3>
                                    <p class="card-text">Tendremos el contenido disponible para tu perfil, y asi puedas repasar algun tema para los examenes.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before far fa-id-badge fa-2x"></i>
                                <div class="card-block block-5">
                                    <h3 class="card-title">Informacion de Contacto</h3>
                                    <p class="card-text">Tendras a la mano información de tus profesores para poder contactarlos.</p>
                                    <a href="{{ route('login') }}" title="Leer más" class="read-more" >Leer más<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <i class="before far fa-star fa-2x"></i>
                                <div class="card-block block-6">
                                    <h3 class="card-title">Calificaciones siempre visibles</h3>
                                    <p class="card-text">Podras en todo momento saber tu calificacion de las actividades y foros.</p>
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

                                <h2><span>Nuestras redes sociales</span></h2>
                                <ul class="contact">
                                    <li><button type="button" class="btn btn-brand btn-facebook"><i class="fab fa-facebook"></i><span>acebook</span></button></li><hr>
                                    <li><button type="button" class="btn btn-brand btn-twitter"><i class="fab fa-twitter"></i><span>Twitter</span></button></li><hr>
                                    <li><button type="button" class="btn btn-brand btn-google-plus"><i class="fas fa-at"></i><span>Google plus</span></button></li><hr>
                                </ul>
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
                                        <small>Centro Nacional de la Transfusión Sanguinea.</small>
                                        <p>Es el encargado de gestionar el contenido de este diplomado.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <footer id="contacto">
            <section class="footer-widget-area footer-widget-area-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <hr>
                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>E-mail</h3>
                                    </div>
                                    <div class="footer-subscription">
                                        <p>
                                            <input class="form-control" required placeholder="Ingresa tu e-mail" name="email" type="email">
                                        </p>
                                        <p>
                                            <textarea class="form-control" required placeholder="Mensaje" name="message" rows="5"></textarea>
                                        </p>
                                        <p>
                                            <input class="btn btn-danger" value="Enviar dudas!" type="submit">
                                        </p>
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
                                            Office:&nbsp; (55) 63-92-22-50<br/>Ext:&nbsp; 51616, 51619 </p>
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
