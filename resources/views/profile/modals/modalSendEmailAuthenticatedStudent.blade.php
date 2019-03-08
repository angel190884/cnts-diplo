<!-- Modal Refuse-->
<div class="modal fade" id="modalSendEmail" tabindex="-1" role="dialog" aria-labelledby="SendEmail" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(['route' => ['sendEmail.student', $user->id],'method' => 'GET'])}}
            <div class="modal-header">
                <h5 class="modal-refuse" id="refuseLabel">Enviar email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::textArea('message',null,['class' => 'form-control','placeholder' => 'Mensaje a usuario','id'=>'message']) !!}
            </div>
            <div class="modal-footer">

                {{ Form::submit('Enviar', array('class' => 'btn btn-success btn-lg btn-block')) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>