<div class="row">
    <div class="col-sm-6 col-lg-3 offset-lg-3">
        <div class="brand-card">
            <div class="brand-card-header bg-facebook"><span style="color: white"><i class="fas fa-clipboard fa-3x"></i></span>
                <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <canvas id="social-box-chart-1" height="144" width="460" class="chartjs-render-monitor" style="display: block; height: 96px; width: 307px;"></canvas>
                    <div id="social-box-chart-1-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 74px; top: 25.6px;"><div class="tooltip-header"><div class="tooltip-header-item">March</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">84</span></div></div></div></div>
            </div>
            <div class="brand-card-body">
                <div>
                    <div class="text-value">{{ $activities->total() }}</div>
                    <div class="text-uppercase text-muted small"><a href="{{ route('activity.index') }}">actividades</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="brand-card">
            <div class="brand-card-header bg-twitter"><span style="color: white"><i class="fas fa-comments fa-3x"></i></span>
                <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <canvas id="social-box-chart-2" height="144" width="460" class="chartjs-render-monitor" style="display: block; height: 96px; width: 307px;"></canvas>
                </div>
            </div>
            <div class="brand-card-body">
                <div>
                    <div class="text-value">{{ $forums->total() }}</div>
                    <div class="text-uppercase text-muted small"><a href="{{ route('forums.index') }}">foros</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Últimas Actividades</div>
            <div class="card-body">
                <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center"><i class="fas fa-clipboard"></i></th>
                        <th>Actividad</th>
                        <th class="text-center">Calificar!</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($activities as $activity)
                        <tr>
                            <td class="text-center">
                                <i class="fas fa-clipboard"></i>
                            </td>
                            <td>
                                <div>{{ ucwords(strtolower($activity->name)) }}</div>
                                <div class="small text-muted"><span>{{ strtoupper($activity->topic->submodule->name) }}</span> | <span><a href="{{ route('showContent',$activity->topic->slug) }}">{{ strtoupper($activity->topic->name) }}</a></span></div>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('scoreActivity',$activity->slug) }}">
                                    <i class="fas fa-sort-numeric-up"></i>
                                </a>
                                | {{ $activity->users()->count() }} | {{ $activity->users()->where('score','!=',0)->count() }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Últimos Foros</div>
            <div class="card-body">
                <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center"><i class="fas fa-comments"></i></th>
                        <th>Foro</th>
                        <th class="text-center">Calificar!</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forums as $forum)
                        <tr>
                            <td class="text-center">
                                <i class="fas fa-comments"></i>
                            </td>
                            <td>
                                <div><a href="{{ route('forums.show',$forum->slug)}}">{{ ucwords(strtolower($forum->forum)) }}</a></div>
                                <div class="small text-muted"><span>{{ strtoupper($forum->formattedStart) }}</span> | {{ strtoupper($forum->formattedEnd) }}</div>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('scoreForum',$forum->slug) }}"><i class="fas fa-sort-numeric-up"></i></a>
                                | {{ $forum->users()->count() }} | {{ $forum->users()->where('score','!=',0)->count() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

