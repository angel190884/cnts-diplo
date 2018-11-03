@extends('layouts.app')

@section('title', 'Preguntas')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Crear opción.</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('questionOptions.store') }}">
                            @csrf
                            {{ Form::hidden('question_id', $question->id) }}
                            <div class="form-group row">
                                <label for="option" class="col-sm-4 col-form-label text-md-right">Opción</label>

                                <div class="col-md-6">
                                    <input id="option" type="text" class="form-control{{ $errors->has('option') ? ' is-invalid' : '' }}" name="option" value="{{ old('option') }}" required autofocus>

                                    @if ($errors->has('option'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('option') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="question_id" class="col-sm-4 col-form-label text-md-right">Pregunta</label>

                                <div class="col-md-6">
                                    <select id="question_id"
                                            type="select"
                                            class="form-control{{ $errors->has('question_id') ? ' is-invalid' : '' }}"
                                            name="question_id"
                                            value="{{ old('quiz_id') }}"
                                            required
                                            disabled>
                                        <option value="{{ $question->id }}">{{ $question->question }}</option>
                                    </select>

                                    @if ($errors->has('question_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('question_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-sm-4 col-form-label text-md-right">Tipo</label>

                                <div class="col-md-6">
                                    <select id="correct"
                                            type="select"
                                            class="form-control{{ $errors->has('correct') ? ' is-invalid' : '' }}"
                                            name="correct"
                                            value="{{ old('correct') }}"
                                            required>
                                        <option value="0">incorrecta</option>
                                        <option value="1">correcta</option>
                                    </select>

                                    @if ($errors->has('correct'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('correct') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Crear
                                    </button>
                                    {!! link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-outline-danger']) !!}
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        Las preguntasde los examenes solo las puede crear un Administrador del sistema.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection