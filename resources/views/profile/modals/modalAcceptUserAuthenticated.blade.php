<!-- Modal Acept-->
<div class="modal fade" id="modalAccept" tabindex="-1" role="dialog" aria-labelledby="AcceptLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(['route' => ['accept.student', $user->id],'method' => 'GET'])}}
            <div class="modal-header">
                <h5 class="modal-accept" id="acceptLabel">Aceptar a usuario como Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">

                {{ Form::submit('Aceptar Estudiante', array('class' => 'btn btn-primary btn-lg btn-block')) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>