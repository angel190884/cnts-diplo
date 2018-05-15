<div class="jumbotron">
    <h1>Bienvenido {{ Auth::user()->fullName }}</h1>
    <p class="lead">
        Para poder inscribirte al Diplomado a distancia <strong class="font-weight-bold">"Sangre y Componentes Seguros"</strong> deberas tener ciertos requisitos minimos para poder ser aceptado.
    </p>
    <hr>
    <div class=container-fluid>
        <div class="row">
            @if(!Auth::user()->course_id)
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p>
                        <a class="btn btn-block btn-warning" href="{{ route('profile.edit', Auth::user()->id) }}" role="button">
                            Debes de llenar tu perfil en este boton para poder inscribirte
                        </a>

                    </p>
                </div>
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
