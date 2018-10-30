@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Calificaciones de Foros</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            @foreach($courses as $course)
                                <thead class="thead-dark">
                                <tr>
                                    <th colspan="{{ $course->users->first()->forums->count() + 1 }}">{{ $course->short_name }}</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($course->users as $user)
                                        <tr>
                                            @if($user->hasRole('student'))
                                                <td>{{ $user->fullName }}</td>
                                                @foreach($user->forums as $forum)
                                                    @if($forum->pivot->score > 6)
                                                        <td bgcolor="#90ee90">
                                                            <ACRONYM title="{{ $forum->forum }}">
                                                                {{ $forum->pivot->score }}
                                                            </ACRONYM>
                                                        </td>
                                                    @else
                                                        <td bgcolor="#f08080">
                                                            <ACRONYM title="{{ $forum->forum }}">
                                                                {{ $forum->pivot->score }}
                                                            </ACRONYM>
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