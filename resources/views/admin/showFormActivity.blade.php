@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Panel Principal - Crear Actividad y enlazarla a los usuarios del diplomado</div>
                    <div class="card-body">
                        <form action="{{ route('activity.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control text-uppercase" id="name" placeholder="Nombre" name="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="number"># Actividad</label>
                                    <input type="number" class="form-control" id="number" placeholder="# de Actividad" name="number_activity" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="topic">Tema</label>
                                <select class="form-control" id="topic" name="topic_id" required>
                                    @foreach($topics as $topic)
                                        <option value="{{ $topic->id }}">{{ $topic->subModule->Module->course->short_name }} - {{ $topic->subModule->Module->name }} - {{ $topic->subModule->name }} - {{ $topic->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea type="text" class="form-control text-uppercase" id="description" placeholder="Descripción" name="description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection