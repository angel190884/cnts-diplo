@role('student')
<li class="nav-item dropdown">
    <a class=" nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Módulos
    </a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
        @foreach (Auth::user()->course->modules as $module)
            <li class="dropdown-submenu">
                <a class="dropdown-item" tabindex="-1" href="#">{{ $module->name }}</a>
                <ul class="dropdown-menu">
                    @foreach ($module->subModules as $subModule)
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#">{{ $subModule->name }}</a>
                            <ul class="dropdown-menu">
                                @foreach ($subModule->topics as $topic)
                                    <li class="dropdown-item">
                                        <a href="{{ route('showContent',$topic->slug)}}">{{ $topic->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('activity.index') }}">Actividades</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('forums.index') }}">Foro de Preguntas</a>
</li>
<li class="nav-item">
    <a class="nav-link disabled" href="#">Examenes</a>
</li>
@endrole
