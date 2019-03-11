@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Diplomados</div>
                    <div class="card-body">
                        <div>
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th colspan="10">DIPLOMADOS</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"><i class="fas fa-graduation-cap"></i></th>
                                        <th scope="col">Nombre corto</th>
                                        <th scope="col">Creado</th>
                                        <th scope="col"><i class="far fa-calendar-alt"></i> inicio</th>
                                        <th scope="col"><i class="far fa-calendar-alt"></i> fin</th>

                                        <th scope="col"><i class="fas fa-users"></i></th>
                                        <th scope="col"><i class="fas fa-check-circle"></i></th>
                                        
                                        <th scope="col"><i class="fas fa-trash"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $course->generation }}</th>
                                        <td>{{ $course->short_name }}</td>
                                        <td>{{ $course->createdAtFormatBasic }}</td>
                                        <td>{{ $course->startFormatBasic }}</td>
                                        <td>{{ $course->endFormatBasic }}</td>

                                        <td><a href="{{ route('student.index',['course' => $course->id]) }}"><i class="fas fa-users"></i></a></td>
                                        <td>
                                            @if($course->active_inscription)
                                                <i class="fas fa-check-circle text-success" data-toggle="modal" data-target="#deactivateModal"></i>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deactivateModal" tabindex="-1" role="dialog" aria-labelledby="deactivateModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form action="{{ route('course.activate',$course) }}" method="post">
                                                                @csrf
                                                                <input type="hidden" value="0" name="activate">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-danger" id="deactivateModalLabel">Desactivar inscripción</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Estas apunto de desactivar la inscripción para el diplomado "Sangre y Componentes Seguros" con nombre corto: <a class="text-danger">{{ $course->short_name }}</a>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger">Desactivar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <i class="fas fa-check-circle text-danger" data-toggle="modal" data-target="#activateModal"></i>
                                                <!-- Modal -->
                                                <div class="modal fade" id="activateModal" tabindex="-1" role="dialog" aria-labelledby="activateModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form action="{{ route('course.activate',$course) }}" method="post">
                                                                @csrf
                                                                <input type="hidden" value="1" name="activate">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-danger" id="activateModalLabel">Activar inscripción</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Estas apunto de activar la inscripción para el diplomado "Sangre y Componentes Seguros" con nombre corto: <a class="text-success">{{ $course->short_name }}</a>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Activar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </td>

                                        <td><i class="fas fa-trash"></i></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection