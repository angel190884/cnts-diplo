<div class="container">
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fas fa-graduation-cap bg-primary fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-primary">DIPLOS ACTIVOS</div>
                        <div class="text-muted text-uppercase font-weight-bold small">total: {{ $courses->count() }}</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('courses.index') }}">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-laptop bg-info fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-info">ALUMNOS</div>
                        <div class="text-muted text-uppercase font-weight-bold small">cantidad:  {{ $users->count() }}</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('student.index') }}">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fas fa-moon bg-warning fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-warning">REGISTRADOS</div>
                        <div class="text-muted text-uppercase font-weight-bold small">cantidad:  {{ $authenticated->count() }}</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('authenticated.index') }}">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-bell bg-danger fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-danger">LOG</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Log del sistema</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('logs')}}">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="row-equal">
        <div class="card-group mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="text-value">{{ $forums->count() }}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Foros</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $forums->count() }}%" aria-valuenow="{{ $forums->count() }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="text-value">{{ $activities->count() }}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Actividades</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $activities->count() }}%" aria-valuenow="{{ $activities->count() }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fas fa-question"></i>
                    </div>
                    <div class="text-value">{{ $quizzes->count() }}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Exámenes</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $quizzes->count() }}%" aria-valuenow="{{ $quizzes->count() }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-wrapper-scroll-y">
        <table class="table table-responsive-sm table-hover table-outline mb-0">
            <thead class="thead-light">
            <tr>
                <th class="text-center">
                    <i class="icon-people"></i>
                </th>
                <th>Alumno</th>
                <th class="text-center">Ciudad</th>
                <th>Actividades</th>
                <th>Foros</th>
                <th>Examenes</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img class="img-avatar" src="{{ Storage::url($user->avatar) }}" alt="{{$user->email}}">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </td>
                    <td>
                        <div>{{ $user->fullname}}</div>
                        <div class="small text-muted">
                            <span>{{ $user->course->short_name }}</span> | Registered: {{ $user->email_verified_at }}</div>
                    </td>
                    <td class="text-center">
                        <div>{{ strtoupper($user->entidad) }}</div>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>{{ $user->activities->where('pivot.score','!=',NULL)->count() }}</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted"> de {{$user->activities->count()}}</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $user->activities->where('pivot.score','!=',NULL)->count()}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="{{$user->activities->count()}}"></div>
                        </div>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>{{ $user->forums->where('pivot.score','!=',NULL)->count() }}</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted"> de {{$user->forums->count()}}</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{$user->forums->where('pivot.score','!=',NULL)->count()}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="{{$user->forums->count()}}"></div>
                        </div>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>{{ $user->quizzes->where('pivot.score','!=',NULL)->count() }}</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted"> de {{ $quizzes->count() }}</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $user->quizzes->where('pivot.score','!=',NULL)->count() }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="{{ $user->quizzes->count() }}"></div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>