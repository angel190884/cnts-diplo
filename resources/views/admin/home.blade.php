<div class="container">
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fas fa-graduation-cap bg-primary fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-primary">DIPLOS ACTIVOS</div>
                        <div class="text-muted text-uppercase font-weight-bold small">total: {{ $courses->count() }}</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-laptop bg-info fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-info">ALUMNOS</div>
                        <div class="text-muted text-uppercase font-weight-bold small">cantidad:  45</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fas fa-moon bg-warning fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-warning">REGISTRADOS</div>
                        <div class="text-muted text-uppercase font-weight-bold small">cantidad:  100</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-bell bg-danger fa-2x px-1 mr-3"></i>
                    <div>
                        <div class="text-value-sm text-danger">LOG</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Log del sistema</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('logs')}}">
                        <span class="small font-weight-bold">Ver más</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="row-equal">
        <div class="card-group mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="text-value">87.500</div>
                    <small class="text-muted text-uppercase font-weight-bold">Foros</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="text-value">385</div>
                    <small class="text-muted text-uppercase font-weight-bold">Actividades</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fas fa-question"></i>
                    </div>
                    <div class="text-value">1238<sub class="bg-danger">pendiente</sub></div>
                    <small class="text-muted text-uppercase font-weight-bold">Examenes</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-wrapper-scroll-y">
        <table class="table table-responsive-sm table-hover table-outline mb-0">
            <thead class="thead-light">
            <tr>
                <th class="text-center">
                    <i class="icon-people"></i>
                </th>
                <th>Alumno</th>
                <th class="text-center">Ciudad</th>
                <th>Actividades</th>
                <th>Foros</th>
                <th>Examenes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Yiorgos Avraamu</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <div>Baja California Norte</div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
            </tr>
            <!--<tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Avram Tarasios</div>
                    <div class="small text-muted">
                        <span>Recurring</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>10%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-visa" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>5 minutes ago</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-warning"></span>
                    </div>
                </td>
                <td>
                    <div>Quintin Ed</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>74%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>1 hour ago</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-secondary"></span>
                    </div>
                </td>
                <td>
                    <div>Enéas Kwadwo</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>98%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-paypal" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last month</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Agapetus Tadeáš</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>22%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-google-wallet" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last week</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Friderik Dávid</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>43%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-amex" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Yesterday</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Yiorgos Avraamu</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <div>Baja California Norte</div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Avram Tarasios</div>
                    <div class="small text-muted">
                        <span>Recurring</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>10%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-visa" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>5 minutes ago</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-warning"></span>
                    </div>
                </td>
                <td>
                    <div>Quintin Ed</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>74%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>1 hour ago</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-secondary"></span>
                    </div>
                </td>
                <td>
                    <div>Enéas Kwadwo</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>98%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-paypal" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last month</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Agapetus Tadeáš</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>22%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-google-wallet" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last week</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Friderik Dávid</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>43%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-amex" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Yesterday</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Yiorgos Avraamu</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <div>Baja California Norte</div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>50%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Avram Tarasios</div>
                    <div class="small text-muted">
                        <span>Recurring</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>10%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-visa" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>5 minutes ago</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-warning"></span>
                    </div>
                </td>
                <td>
                    <div>Quintin Ed</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>74%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>1 hour ago</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-secondary"></span>
                    </div>
                </td>
                <td>
                    <div>Enéas Kwadwo</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>98%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-paypal" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last month</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
                    </div>
                </td>
                <td>
                    <div>Agapetus Tadeáš</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>22%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-google-wallet" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Last week</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="avatar">
                        <img class="img-avatar" src="{{ Storage::url('avatars/no_user.png') }}" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-danger"></span>
                    </div>
                </td>
                <td>
                    <div>Friderik Dávid</div>
                    <div class="small text-muted">
                        <span>New</span> | Registered: Jan 1, 2015</div>
                </td>
                <td class="text-center">
                    <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                </td>
                <td>
                    <div class="clearfix">
                        <div class="float-left">
                            <strong>43%</strong>
                        </div>
                        <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                        </div>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-cc-amex" style="font-size:24px"></i>
                </td>
                <td>
                    <div class="small text-muted">Last login</div>
                    <strong>Yesterday</strong>
                </td>
            </tr>-->
            </tbody>
        </table>
    </div>
</div>