<!-- Modal Voucher-->
<div class="modal fade" id="modalVoucher" tabindex="-1" role="dialog" aria-labelledby="VoucherLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::model($user, ['route' => ['u_voucher', $user->id],'method' => 'PUT', 'class' => 'needs-validation', 'novalidate'=>'', 'enctype'=>'multipart/form-data'])}}
            <div class="modal-header">
                <h5 class="modal-voucher" id="voucherLabel">Subir PDF Vaucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input  class="btn btn-secondary btn-block" type="file" name="file_voucher" accept="application/pdf" />
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