@role('admin')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Diplomados
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('courses.index') }}">Listar</a>
        <a class="dropdown-item" href="#">Editar fechas<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Copiar<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Foro de preguntas<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="{{ route('student.index') }}">Alumnos</a>
        <a class="dropdown-item" href="#">Usuarios registrados<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Emisión de diplomas<sub><small class="bg-danger">pendiente</small></sub></a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Inscripciones
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('authenticated.index') }}">Revizar documentación</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Calificaciones
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Foros<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Actividades<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Examanes<sub><small class="bg-danger">pendiente</small></sub></a>
    </div>
</li>
<!--<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Convocatorias
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Emitir<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Dar de baja<sub><small class="bg-danger">pendiente</small></sub></a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Comentarios/Quejas
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Listar<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Enviar Mail a usuario<sub><small class="bg-danger">pendiente</small></sub></a>
        <a class="dropdown-item" href="#">Enviar Mail a maestro<sub><small class="bg-danger">pendiente</small></sub></a>
    </div>
</li>-->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Examenes
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('quizzes.index')}}">Examenes</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Logs
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('logs')}}">Log</a>
    </div>
</li>
@endrole