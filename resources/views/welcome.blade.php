<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <img lass="card-img-top" style="height: 75px; width: 75px; display: block;" src="{{ Storage::url('images/favicon.png') }}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#link">Link</a>
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
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-danger" href="#diplomado" role="button">Guia de Inscripción</a></p>
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
                    <div class="carousel-item">
                        <img src="{{ Storage::url('images/celulas.jpg') }}" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>Puedes contactarnos para cualquier duda a los telefonos del pie de pagina.</h1>
                                <p><i class="fas fa-location-arrow fa-2x"></i>dirección: Othón de Mendizabal 195,Col. Zacatenco, CDMX. C.P. 07360</p>
                                <p><a class="btn btn-lg btn-danger" href="#contacto" role="button">contacto</a></p>
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

        <section id="inicio">
            <article>
                <div class="container-fluid main">
                    <div class="py-5 bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16448a36915%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16448a36915%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16448a36916%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16448a36916%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16448a36919%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16448a36919%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <a href="#">cntscursos@gmail.com</a><br/><a href="#">helpme@donation.com</a></p>
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
