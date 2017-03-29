<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="options">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#calendario" data-toggle="tab">
                                <i class="fa fa-calendar"></i>
                                <span class="visible-md visible-lg">Calendario</span>
                            </a>
                        </li>
                        <li>
                            <a href="#registro" data-toggle="tab">
                                <i class="fa fa-book"></i>
                                <span class="visible-md visible-lg">Agendar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="calendario" class="tab-pane active">
                        <div class="alert alert-info">
                            <i class="fa fa-info-circle"></i>
                            Estas son las citas pendientes para este mes.
                        </div>
                        <div id='calendar-drag'></div>
                    </div>
                    <div id="registro" class="tab-pane">
                        <div class="alert alert-info">
                            <i class="fa fa-info-circle"></i>
                            Para agregar una cita a su agenda. Favor de completar los siguientes campos.
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtNombrePac" class="control-label col-sm-3">Nombre del paciente:</label>
                                <div class="col-sm-6">
                                    <input id="txtNombrePac" type="text" class="form-control"
                                           placeholder="Nombre del paciente">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtEdadPac" class="control-label col-sm-3">Edad del paciente:</label>
                                <div class="col-sm-6">
                                    <input id="txtedadPac" type="number" min="1" class="form-control" placeholder="3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSintPac" class="control-label col-sm-3">Síntomas:</label>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <textarea id="txtSintPac" class="form-control"
                                                  placeholder="Dolor de cabeza, garganta irritada..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDiaCita" class="control-label col-sm-3">Día solicitado:</label>
                                <div class="col-sm-6">
                                    <input id="txtDiaCita" type="datetime-local" class="form-control"
                                           placeholder="07-03-2017">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtHoraCita" class="control-label col-sm-3">Horario solicitado:</label>
                                <div class="col-sm-6">
                                    <input id="txtHoraCita" type="text" class="form-control" placeholder="11:00 hrs">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="btn-toolbar">
                                        <button class="btn btn-primary" id="btnGuardar">Guardar en agenda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>