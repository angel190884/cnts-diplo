<div class="jumbotron">
    <h1>Bienvenido {{ Auth::user()->fullName }}</h1>
    <p class="lead">
        Para poder inscribirte al Diplomado a distancia <strong class="font-weight-bold">"Sangre y Componentes Seguros"</strong> deberas tener ciertos requisitos minimos para poder ser aceptado.
    </p>
    <hr>
    <div class=container-fluid>
        @include('layouts.messages')
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <p>
                    <a class="btn btn-lg btn-warning" href="{{ route('profile.edit', Auth::user()->id) }}" role="button">Debes de llenar tu perfil en este boton para poder inscribirte</a>
                </p>
            </div>
            <div class="container-fluid">
                <div class="col-xs-12">
                    <p>
                        <button class="btn btn-lg btn-danger" disabled>Inscribete</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
