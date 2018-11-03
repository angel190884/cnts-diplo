@extends('layouts.app')

@section('title', 'Preguntas')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Crear Pregunta.</div>
                    <div class="card-body">
                        {{ Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'PUT'])}}
                            {{ Form::hidden('quiz_id',$question->quiz_id) }}
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Pregunta</label>

                                <div class="col-md-6">
                                    <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ $question->question }}" required autofocus>

                                    @if ($errors->has('question'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="course_id" class="col-sm-4 col-form-label text-md-right">Examen</label>

                                <div class="col-md-6">
                                    <select id="course_id"
                                            type="select"
                                            class="form-control{{ $errors->has('quiz_id') ? ' is-invalid' : '' }}"
                                            name="quiz_id"
                                            required
                                            disabled>
                                        <option value="{{ $question->quiz_id }}">{{ $question->quiz->title }}</option>
                                    </select>

                                    @if ($errors->has('quiz_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('quiz_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-sm-4 col-form-label text-md-right">Tipo</label>

                                <div class="col-md-6">
                                    <select id="type"
                                            type="select"
                                            class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
                                            name="type"
                                            required>
                                        @for($i=1;$i <= 5;$i++)
                                            @if($question->type == $i)
                                                <option value="{{ $i }}" selected>{{ $i }}</option>
                                            @else
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endif
                                        @endfor
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                    {!! link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-outline-danger']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer">
                        Las preguntasde los examenes solo las puede crear un Administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection