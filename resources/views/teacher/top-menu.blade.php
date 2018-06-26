@role('teacher')
<li class="nav-item">
    <a class="nav-link" href="{{ route('activity.index') }}">Actividades</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('questions.index') }}">Foro de Preguntas</a>
</li>
@endrole