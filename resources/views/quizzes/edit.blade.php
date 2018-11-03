@extends('layouts.app')

@section('title', 'Examenes')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Crear Examen.</div>
                    <div class="card-body">
                        {{ Form::model($quiz, ['route' => ['quizzes.update', $quiz->id],'method' => 'PUT'])}}
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Título del Examen</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $quiz->title }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="course_id" class="col-sm-4 col-form-label text-md-right">Diplomado</label>

                                <div class="col-md-6">
                                    <select id="course_id"
                                            type="select"
                                            class="form-control{{ $errors->has('course_id') ? ' is-invalid' : '' }}"
                                            name="course_id"
                                            required
                                            autofocus>
                                        @foreach($courses as $course)
                                            @if($course->id == $quiz->course_id)
                                                <option value="{{ $course->id }}" selected>{{ $course->short_name }}</option>
                                            @else
                                                <option value="{{ $course->id }}">{{ $course->short_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @if ($errors->has('course_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('course_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="number_questions" class="col-sm-4 col-form-label text-md-right"># Preguntas</label>

                                <div class="col-md-6">
                                    <select id="number_questions"
                                            type="select"
                                            class="form-control{{ $errors->has('number_questions') ? ' is-invalid' : '' }}"
                                            name="number_questions"
                                            required>
                                        @for($i=10;$i <= 30;$i++)
                                            @if($i == $quiz->number_questions)
                                                <option value="{{ $i }}" selected>{{ $i }}</option>
                                            @else
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endif
                                        @endfor
                                    </select>

                                    @if ($errors->has('number_questions'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('number_questions') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="min_score" class="col-sm-4 col-form-label text-md-right">Calificación mínima</label>

                                <div class="col-md-6">
                                    <select id="min_score"
                                            type="select"
                                            class="form-control{{ $errors->has('min_score') ? ' is-invalid' : '' }}"
                                            name="min_score"
                                            required>
                                        @for($i=6;$i <= 10;$i++)
                                            @if($i == $quiz->min_score)
                                                <option value="{{ $i }}" selected>{{ $i }}</option>
                                            @else
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endif
                                        @endfor
                                    </select>

                                    @if ($errors->has('min_score'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('min_score') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar
                                    </button>
                                    {!! link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-outline-danger']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer">
                        Los examenes solo los puede crear un Administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection