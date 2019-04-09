<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            @guest

            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                @include('authenticated.top-menu')
                @include('student.top-menu')
                @include('teacher.top-menu')
                @include('admin.top-menu')
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('faq-activities') }}"><i class="fas fa-question-circle"></i></a>
                </li>
            @endguest
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @can('edit_roles&permissions') {{-- Laravel-permission blade helper --}}
                        <a class="dropdown-item" href="{{ route('users.index')  }}">
                            Roles & Permissions
                        </a>
                        <a class="dropdown-item" href="{{ route('activity.create')  }}">
                            Agregar Actividad
                        </a>
                        <a class="dropdown-item" href="{{ route('topic.slug')  }}">
                            slug-topic auto
                        </a>
                        @endcan
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>