@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Calificaciones de Actividades</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            @foreach($courses as $course)
                                <thead class="thead-dark">
                                <tr>
                                    <th colspan="{{ $course->users->first()->activities->count() + 1 }}">{{ $course->short_name }}</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($course->users as $user)
                                        <tr>
                                            @if($user->hasRole('student'))
                                                <td>{{ $user->fullName }}</td>
                                                @foreach($user->activities->sortBy('number_activity') as $activity)
                                                    @if($activity->pivot->score >= 6)
                                                        <td bgcolor="#90ee90">
                                                            <abbr title="{{ $activity->number_activity . '.-' .$activity->name }}">
                                                                {{ $activity->pivot->score }}
                                                            </abbr>
                                                        </td>
                                                    @else
                                                        <td bgcolor="#f08080">
                                                            <abbr title="{{ $activity->number_activity . '.-' .$activity->name }}">
                                                                {{ $activity->pivot->score }}
                                                            </abbr>
                                                        </td>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop