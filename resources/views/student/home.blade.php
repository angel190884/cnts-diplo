<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>7</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Las ultimas calificaciones de tus tareas apareceran aqui</p>
                    <a href="{{ route('activity.index') }}" class="btn btn-sm btn-danger">Actividades</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary event-primary text-center border border-light">
                <div class="panel-heading text-center"><h2><a href="#">Foros</a></h2></div>
                <div class="panel-body nopadding">
                    <table class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th scope="col">foro</th>
                            <th scope="col">inicio</th>
                            <th scope="col">fin</th>
                            <th scope="col">calif.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Calificaciones de los foros en los que participaste aqui apareceran.</p>
                    <a href="{{ route('questions.index') }}" class="btn btn-sm btn-danger">Foros</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary event-primary text-center border border-light">
                <div class="panel-heading text-center"><h2><a href="#">Examenes</a></h2></div>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>9</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Los examenes que debes presentar apareceran en esta tabla y por tiempo limitado asi que te recomendamos estar pendiente.</p>
                    <a href="#" class="btn btn-sm btn-danger">Examenes</a>
                </div>
            </div>
        </div>
    </div>
</div>