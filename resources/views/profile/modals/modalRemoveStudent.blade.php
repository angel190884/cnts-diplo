<!-- Modal Remove Student-->
<div class="modal fade" id="modalRemoveStudent" tabindex="-1" role="dialog" aria-labelledby="RemoveStudent" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(['route' => ['users.destroy', $user->id],'method' => 'DELETE'])}}
            <div class="modal-header">
                <h5 class="modal-removeStudent" id="removeStudentLabel">Eliminar Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="bg-dark text-danger">Estas a punto de eliminar todo el historial del alumno, si no estas seguro cancela este proceso.</p>
            </div>
            <div class="modal-footer">
                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger btn-lg btn-block')) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>