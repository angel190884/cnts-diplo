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
                                        <th colspan="8">DIPLOMADOS</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"><i class="fas fa-graduation-cap"></i></th>
                                        <th scope="col">Nombre corto</th>
                                        <th scope="col">Creado</th>
                                        <th scope="col"><i class="fas fa-clipboard"></i></th>
                                        <th scope="col"><i class="fas fa-users"></i></th>
                                        <th scope="col"><i class="fas fa-pen-square"></i></th>
                                        <th scope="col"><i class="fas fa-comments"></i></th>
                                        <th scope="col"><i class="fas fa-trash"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $course->generation }}</th>
                                        <td>{{ $course->short_name }}</td>
                                        <td>{{ $course->createdAtFormatBasic }}</td>
                                        <td><i class="fas fa-clipboard"></i></td>
                                        <td><i class="fas fa-users"></i></td>
                                        <td><i class="fas fa-pen-square"></i></td>
                                        <td><i class="fas fa-comments"></i></td>
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