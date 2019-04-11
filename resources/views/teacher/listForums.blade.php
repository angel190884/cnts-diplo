@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                Preguntas del profesor.( <strong>{{ $forums->total() }} resultados</strong> )
                                @role('teacher')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#addForum">
                                    <i class="fas fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addForum" tabindex="-1" role="dialog" aria-labelledby="addForumLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addForumLabel">Agregar pregunta</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            {!! Form::model($forums, ['route' => ['forums.store']]) !!}
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <input name="forum" class="form-control" placeholder="¿Escribe aquí tu pregunta? u opinion " required >
                                                    </div>
                                                    <div class="card-body">
                                                                <textarea name="observations" class="form-control" placeholder="observaciones para los alumnos" rows="3" required>

                                                                </textarea>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                                            </div>
                                                            {{ Form::select('course', $courses, null, ['placeholder' => 'Selecciona un Diplomado...', 'class' => 'form-control', 'required']) }}
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    Curso
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                            <input name="start" type="date" class="form-control" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    Inicio
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                                            </div>
                                                            <input name="end" type="date" class="form-control" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    Fin&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Añadir</button>
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                @endrole
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                @role('teacher')
                                    <div class="form-group">
                                        {{ Form::open(['route' => 'forums.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                            <label class="sr-only" for="grupoDiplomado">Diplomado</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                                </div>
                                                {{ Form::select('course', $courses, $course, ['placeholder' => 'Selecciona un Diplomado...', 'class' => 'form-control', 'id' => 'grupoDiplomado']) }}
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        {{ Form::close() }}
                                    </div>
                                @endrole
                                @role('student')
                                    {{ Form::open(['route' => 'forums.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                    <label class="sr-only" for="grupoDiplomado">Diplomado</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                        </div>
                                        {{ Form::select('teacher', $teachers, $teacher, ['placeholder' => 'Selecciona un Profesor...', 'class' => 'form-control']) }}
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @endrole
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark">
                                <tr class="text-center">
                                    <th colspan="13">PREGUNTAS</th>
                                </tr>
                                <tr class="text-center">
                                    <th scope="col">#ID</th>
                                    <th scope="col">Pregunta</th>
                                    <th scope="col">Inicio</th>
                                    <th scope="col">Fin</th>
                                    @role('student')
                                    <th scope="col">Profesor</th>
                                    @endrole
                                    <th scope="col">foro</th>
                                    @role('teacher')
                                        <th scope="col">Calificar</th>
                                    @endrole
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($forums as $forum)
                                    <tr class="text-center">
                                        <th scope="row">{{ $forum->id }}</th>
                                        <td><a href="{{ route('forums.show',$forum->slug)}}">{{ $forum->forum }}</a></td>
                                        <td>{{ $forum->formattedStart }}</td>
                                        <td>{{ $forum->formattedEnd }}</td>
                                        @role('student')
                                            <td>{{ $forum->teacher->fullName }}</td>
                                        @endrole
                                        <td class="text-center"><a href="{{ route('forums.show',$forum->slug)}}"><i class="far fa-comment-alt"></i></a></td>
                                        @role('teacher')
                                            <td class="text-center"><a href="{{ route('scoreForum',$forum->slug) }}"><i class="fas fa-pen-square"></i></a></td>
                                        @endrole
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if(auth()->user()->hasRole('teacher'))
                            {{ $forums->appends([
                                            'course' => $course
                                            ])->links() }}
                        @endif
                        @if(auth()->user()->hasRole('student'))
                                {{ $forums->appends([
                                                'teacher' => $teacher
                                                ])->links() }}
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop