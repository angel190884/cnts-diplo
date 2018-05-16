<!-- Modal Refuse-->
<div class="modal fade" id="modalRefuse" tabindex="-1" role="dialog" aria-labelledby="RefuseLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(['route' => ['refuse.student', $user->id],'method' => 'GET'])}}
            <div class="modal-header">
                <h5 class="modal-refuse" id="refuseLabel">Rechazar como Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::textArea('text_refuse',null,['class' => 'form-control','placeholder' => 'Mensaje a usuario','id'=>'text_refuse']) !!}
            </div>
            <div class="modal-footer">

                {{ Form::submit('Rechazar Estudiante', array('class' => 'btn btn-danger btn-lg btn-block')) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>