<div class="jumbotron">
    <div class="text-center">
        <img  class="img-fluid" src="{{ Storage::url("images/cnts.png") }}" alt="cnts" width="600">
    </div>
    <div class="text-center">
        <h1 class="text-center"><b>Bienvenido {{ Auth::user()->fullName }}</b></h1>
        <hr>
    </div>
    <div class="alert alert-info text-center col-sm-12 col-lg-8 offset-lg-2" role="alert">

        <p>
            En nombre del <b>Centro Nacional de la Transfusión  Sanguínea</b>, te damos la más coordial bienvenida.

            Te has registrado al Sistema Web del Diplomado a distancia <b class="font-weight-bold">"Sangre y Componentes Seguros"</b>
            deberas cumplir con ciertos requisitos minimos para poder continuar con el diplomado y ser aceptado por el <b>CNTS</b>.
        </p>

        <p>
            El <b class="text-primary">siguiente PASO</b> sera la Modificación de tu perfil y tus datos generales en el siguiente Botón.
        </p>
        <div class="container-fluid text-center pb-5">
            @if(!Auth::user()->course_id)
                <a class="btn btn-primary" href="{{ route('profile.edit', Auth::user()->id) }}" role="button">
                    <i class="far fa-user fa-4x"></i>
                    <p>Editar perfil</p>
                </a>
            @else
                @if(Auth::user()->file_voucher)
                    @if(!Auth::user()->file_paid_voucher)
                        <div>
                            <a href="#" style="font-size:3em; color:dodgerblue" data-toggle="modal" data-target="#modalPaidVoucher">
                                <i class="fas fa-upload"></i>
                                Subir pdf del voucher sellado por el banco
                            </a>
                        </div>
                        <!-- Modal PaidVoucher-->
                        <div class="modal fade" id="modalPaidVoucher" tabindex="-1" role="dialog" aria-labelledby="ImgLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    {{ Form::model(Auth::user(), ['route' => ['u_paid_voucher', Auth::user()->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
                                    <div class="modal-header">
                                        <h5 class="modal-paidVoucher" id="paidVoucherLabel">Subir Voucher Pagado</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input  class="btn btn-secondary btn-block" type="file" name="file_paid_voucher" accept="application/pdf" />
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
                    @else
                        <div class="alert alert-success alert-dismissible fade show">
                            <p class="text-lg-left">
                                <a>Haz cumplido con los requisitos, en breve se te enviara un <strong>e-mail</strong> para poder ingresar al diplomado!!!</a>
                            </p>
                        </div>
                    @endif
                @else
                    <div class="alert alert-success alert-dismissible fade show">
                        <p class="text-lg-left">
                            <a>Tienes una solicitud de ingreso activa espera instrucciones por email!!!</a>
                        </p>
                    </div>
                @endif
            @endif
        </div>
    </div>


</div>
