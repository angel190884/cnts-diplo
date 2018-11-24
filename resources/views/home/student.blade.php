<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="panel panel-primary event-primary text-center border border-light">
                <div class="panel-heading text-center"><h2><a href="#">Actividades</a></h2></div>
                <div class="panel-body">
                    <table class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Actividad</th>
                            <th scope="col">F. subida</th>
                            <th scope="col">Calif.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activities as $activity)
                            <tr>
                                <th scope="row">{{ $activity->number_activity }}</th>
                                <td><a href="{{ route('showContent',$activity->topic->slug) }}">{{ strtoupper(strtolower($activity->name)) }}</a></td>
                                <td>{{ $activity->pivot->updated_at }}</td>
                                <td>{{ $activity->pivot->score }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Las ultimas calificaciones de tus tareas aparecerán aquí</p>
                    <a href="{{ route('activity.index') }}" class="btn btn-primary btn-lg" role="button"><i class="fas fa-clipboard fa-3x"></i> <br/>Actividades</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="panel panel-primary event-primary text-center border border-light">
                <div class="panel-heading text-center"><h2><a href="#">Foros</a></h2></div>
                <div class="panel-body nopadding">
                    <table class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">inicio</th>
                            <th scope="col">fin</th>
                            <th scope="col">calif.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forums as $forum)
                            <tr>
                                <th scope="row">{{ $forum->id }}</th>
                                <td>{{ $forum->formattedStart }}</td>
                                <td>{{ $forum->formattedEnd }}</td>
                                <td>{{ $forum->pivot->score }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Calificaciones de los foros en los que participaste aquí aparecerán.</p>
                    <a href="{{ route('forums.index') }}" class="btn btn-warning btn-lg" role="button"><i class="far fa-comment fa-3x"></i> <br/>Foros</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="panel panel-primary event-primary text-center border border-light">
                <div class="panel-heading text-center"><h2><a href="#">Exámenes</a></h2></div>
                <div class="panel-body nopadding">
                    <table class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">examen</th>
                            <th scope="col">fin</th>
                            <th scope="col">calif.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quizzes as $quiz)
                            @if($quiz->end > \Carbon\Carbon::now())
                                <tr>
                                    <th scope="row">{{ $quiz->id }}</th>
                                    <td>{{ $quiz->title }}</td>
                                    <td>{{ $quiz->end }}</td>
                                    <td>{{ $quiz->pivot->score }}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Los exámenes aparecerán en esta tabla y por tiempo limitado asi que te recomendamos estar pendiente.</p>
                    <a href="{{ route('quizzes.indexStudent')}}" class="btn btn-danger btn-lg" role="button"><i class="far fa-edit fa-3x"></i> <br/>Exámenes</a>
                </div>
            </div>
        </div>
    </div>
</div>