<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
</li>
<li class="nav-item dropdown">
    <a class=" nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Contenido Curso
    </a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
    @foreach ($modules as $module)
        <li class="dropdown-submenu">
            <a class="dropdown-item" tabindex="-1" href="#">{{ $module->name }}</a>
            <ul class="dropdown-menu">
            @foreach ($module->subModules as $subModule)
                <li class="dropdown-submenu">
                    <a class="dropdown-item" tabindex="-1" href="#">{{ $subModule->name }}</a>
                    <ul class="dropdown-menu">
                    @foreach ($subModule->topics as $topic)
                        <li class="dropdown-item">
                            <a href="www.google.com">{{ $topic->name }}</a>
                        </li>
                    @endforeach
                    </ul>
                </li>
            @endforeach
            </ul>
        </li>
    @endforeach
        <li class="dropdown-submenu">
            <a  class="dropdown-item" tabindex="-1" href="#">Modulo Introductorio</a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Introducción</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="{{ route('view.student.content') }}">Programas de educación a distancia</a></li>
                        <li class="dropdown-item"><a href="#">Módulos</a></li>
                        <li class="dropdown-item"><a href="#">Papel del asesor</a></li>
                        <li class="dropdown-item"><a href="#">Papel del tutor</a></li>
                        <li class="dropdown-item"><a href="#">Evaluación</a></li>
                        <li class="dropdown-item"><a href="#">Guías y principios para práctica transfusional segura</a></li>
                        <li class="dropdown-item"><a href="#">Objetivos del módulo</a></li>
                        <li class="dropdown-item"><a href="#">Planificación del estudio</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Profesionalismo</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Papel del personal de enfermería en la donación de sangre</a></li>
                        <li class="dropdown-item"><a href="#">Papel del personal técnico en los servicios de Medicina transfusional</a></li>
                        <li class="dropdown-item"><a href="#">Confidencialidad</a></li>
                        <li class="dropdown-item"><a href="#">Conducta y vestimenta</a></li>
                        <li class="dropdown-item"><a href="#">Organizaciones profesionales</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Procediminetos de Seguridad</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Responsabilidad por la seguridad</a></li>
                        <li class="dropdown-item"><a href="#">Identificación de los riesgos potenciales</a></li>
                        <li class="dropdown-item"><a href="#">Ropa y equipos protectores</a></li>
                        <li class="dropdown-item"><a href="#">Envío del material desde las unidades móviles hasta el banco de sangre</a></li>
                        <li class="dropdown-item"><a href="#">Envío de muestras</a></li>
                        <li class="dropdown-item"><a href="#">Eliminación segura de residuos</a></li>
                        <li class="dropdown-item"><a href="#">Procedimientos de desinfección</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Calidad y garantía de calidad</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 1.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 1.2.2</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Conservación correcta de la sangre y plasma</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 1.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 1.2.2</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Mantenimiento de la cedena de frio</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 1.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 1.2.2</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Control de existencias</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 1.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 1.2.2</a></li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Plan de acción</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 1.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 1.2.2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a  class="dropdown-item" tabindex="-1" href="#">Modulo Uno</a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">SubCapitulo 2.1</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 2.1.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 2.1.2</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">SubCapitulo 2.2</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 2.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 2.2.2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a  class="dropdown-item" tabindex="-1" href="#">Modulo Dos</a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">SubCapitulo 2.1</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 2.1.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 2.1.2</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">SubCapitulo 2.2</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 2.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 2.2.2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a  class="dropdown-item" tabindex="-1" href="#">Modulo Tres</a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">SubCapitulo 2.1</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 2.1.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 2.1.2</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">SubCapitulo 2.2</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Tema 2.2.1</a></li>
                        <li class="dropdown-item"><a href="#">Tema 2.2.2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>
