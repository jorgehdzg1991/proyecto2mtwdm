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
                        <div id="calendar" class="tab-pane active">
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle"></i>
                                Estas son las citas pendientes para este mes.
                            </div>
                        </div>
                        <div id="calendar-drag" class="fc fc-ltr">
                        <table class="fc-header" style="width:100%">
                            <tbody>
                            <tr>
                                <td class="fc-header-left">
                                    <span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on"><i class="fa fa-angle-left"></i></span>
                                    <span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on"><i class="fa fa-angle-right"></i></span>
                                    <span class="fc-header-space"></span>
                                    <span class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled" unselectable="on">Hoy</span>
                                </td>
                                <td class="fc-header-center"><span class="fc-header-title"><h2>Marzo 2017</h2></span></td>
                                <td class="fc-header-right">
                                    <span class="fc-button fc-button-month fc-state-default fc-corner-left fc-state-active" unselectable="on">Mes</span>
        <!--                            <span class="fc-button fc-button-agendaWeek fc-state-default" unselectable="on">Semana</span>
        -->                            <span class="fc-button fc-button-agendaDay fc-state-default fc-corner-right" unselectable="on">Día</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="fc-content" style="position: relative;">
                            <div class="fc-view fc-view-month fc-grid" style="position:relative" unselectable="on">
                                <div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0">
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 282px; width: 88px; top: 45px;">

                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 282px; width: 88px; top: 62px;">
                                        <div class="fc-event-inner">
        <!--                                    <span class="fc-event-time">9a</span>
                                            <span class="fc-event-title">algo mas</span>
        -->                                </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 282px; background-color: rgb(239, 161, 49); width: 88px; top: 121px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-title">Evento de todo el día</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-end" style="position: absolute; left: 1px; background-color: rgb(133, 199, 68); width: 276px; top: 45px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-title">Curso Pediatría</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 96px; background-color: rgb(231, 76, 60); width: 88px; top: 62px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-time">4p</span>
                                            <span class="fc-event-title">Ausente</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 96px; background-color: rgb(231, 76, 60); width: 88px; top: 121px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-time">4p</span>
                                            <span class="fc-event-title">Ausente</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 375px; background-color: rgb(118, 196, 237); width: 88px; top: 45px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-time">10:30a</span>
                                            <span class="fc-event-title">Laura Méndez</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 375px; background-color: rgb(52, 73, 94); width: 88px; top: 62px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-time">12p</span>
                                            <span class="fc-event-title">Laboratorios</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 468px; background-color: rgb(43, 188, 224); width: 88px; top: 45px;">
                                        <div class="fc-event-inner">
                                            <span class="fc-event-time">7p</span>
                                            <span class="fc-event-title">Guadalupe Infante</span>
                                        </div>
                                        <div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                </div>
                                <table class="fc-border-separate" style="width:100%" cellspacing="0">
                                    <thead>
                                    <tr class="fc-first fc-last">
                                        <th class="fc-day-header fc-sun fc-widget-header fc-first" style="width: 93px;">Dom</th>
                                        <th class="fc-day-header fc-mon fc-widget-header" style="width: 93px;">Lun</th>
                                        <th class="fc-day-header fc-tue fc-widget-header" style="width: 93px;">Mar</th>
                                        <th class="fc-day-header fc-wed fc-widget-header" style="width: 93px;">Mie</th>
                                        <th class="fc-day-header fc-thu fc-widget-header" style="width: 93px;">Jue</th>
                                        <th class="fc-day-header fc-fri fc-widget-header" style="width: 93px;">Vie</th>
                                        <th class="fc-day-header fc-sat fc-widget-header fc-last">Sab</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="fc-week fc-first"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-past fc-first" data-date="2017-02-26">
                                            <div style="min-height: 75px;"><div class="fc-day-number">26</div>
                                                <div class="fc-day-content"><div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-mon fc-widget-content fc-other-month fc-past" data-date="2017-02-27">
                                            <div>
                                                <div class="fc-day-number">27</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-tue fc-widget-content fc-other-month fc-past" data-date="2017-02-28">
                                            <div>
                                                <div class="fc-day-number">28</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-wed fc-widget-content fc-past" data-date="2017-03-01">
                                            <div>
                                                <div class="fc-day-number">1</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-thu fc-widget-content fc-past" data-date="2017-03-02">
                                            <div>
                                                <div class="fc-day-number">2</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-fri fc-widget-content fc-today fc-state-highlight" data-date="2017-03-03">
                                            <div>
                                                <div class="fc-day-number">3</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2017-03-04">
                                            <div>
                                                <div class="fc-day-number">4</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 50px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="fc-week">
                                        <td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2017-03-05">
                                            <div style="min-height: 75px;">
                                                <div class="fc-day-number">5</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-mon fc-widget-content fc-future" data-date="2017-03-06">
                                            <div>
                                                <div class="fc-day-number">6</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-tue fc-widget-content fc-future" data-date="2017-03-07">
                                            <div>
                                                <div class="fc-day-number">7</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-wed fc-widget-content fc-future" data-date="2017-03-08">
                                            <div>
                                                <div class="fc-day-number">8</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-thu fc-widget-content fc-future" data-date="2017-03-09">
                                            <div>
                                                <div class="fc-day-number">9</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-fri fc-widget-content fc-future" data-date="2017-03-10">
                                            <div>
                                                <div class="fc-day-number">10</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2017-03-11">
                                            <div>
                                                <div class="fc-day-number">11</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 33px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="fc-week">
                                        <td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2017-03-12">
                                            <div style="min-height: 75px;">
                                                <div class="fc-day-number">12</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-mon fc-widget-content fc-future" data-date="2017-03-13">
                                            <div>
                                                <div class="fc-day-number">13</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-tue fc-widget-content fc-future" data-date="2017-03-14">
                                            <div>
                                                <div class="fc-day-number">14</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-wed fc-widget-content fc-future" data-date="2017-03-15">
                                            <div>
                                                <div class="fc-day-number">15</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-thu fc-widget-content fc-future" data-date="2017-03-16">
                                            <div>
                                                <div class="fc-day-number">16</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-fri fc-widget-content fc-future" data-date="2017-03-17">
                                            <div>
                                                <div class="fc-day-number">17</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2017-03-18">
                                            <div>
                                                <div class="fc-day-number">18</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="fc-week">
                                        <td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2017-03-19"><div style="min-height: 75px;"><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2017-03-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2017-03-21"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2017-03-22"><div><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2017-03-23"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2017-03-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future fc-last" data-date="2017-03-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-future fc-first" data-date="2017-03-26"><div style="min-height: 75px;"><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 17px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2017-03-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 17px;">&nbsp;</div></div></div></td>
                                        <td class="fc-day fc-tue fc-widget-content fc-future" data-date="2017-03-28">
                                            <div>
                                                <div class="fc-day-number">28</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 17px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-wed fc-widget-content fc-future" data-date="2017-03-29">
                                            <div>
                                                <div class="fc-day-number">29</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 17px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-thu fc-widget-content fc-future" data-date="2017-03-30">
                                            <div>
                                                <div class="fc-day-number">30</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 17px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-fri fc-widget-content fc-future" data-date="2017-03-31">
                                            <div>
                                                <div class="fc-day-number">31</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 17px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2017-04-01">
                                            <div>
                                                <div class="fc-day-number">1</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 17px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="fc-week fc-last">
                                        <td class="fc-day fc-sun fc-widget-content fc-other-month fc-future fc-first" data-date="2017-04-02">
                                            <div style="min-height: 78px;">
                                                <div class="fc-day-number">2</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-mon fc-widget-content fc-other-month fc-future" data-date="2017-04-03">
                                            <div>
                                                <div class="fc-day-number">3</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-tue fc-widget-content fc-other-month fc-future" data-date="2017-04-04">
                                            <div>
                                                <div class="fc-day-number">4</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2017-04-05">
                                            <div>
                                                <div class="fc-day-number">5</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2017-04-06">
                                            <div>
                                                <div class="fc-day-number">6</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2017-04-07">
                                            <div>
                                                <div class="fc-day-number">7</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2017-04-08">
                                            <div><div class="fc-day-number">8</div>
                                                <div class="fc-day-content">
                                                    <div style="position: relative; height: 0px;">&nbsp;</div>
                                                </div></div></td></tr></tbody></table></div></div></div>
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
                                    <input id="txtNombrePac" type="text" class="form-control" placeholder="Nombre del paciente">
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
                                        <textarea id="txtSintPac" class="form-control" placeholder="Dolor de cabeza, garganta irritada..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDiaCita" class="control-label col-sm-3">Día solicitado:</label>
                                <div class="col-sm-6">
                                    <input id="txtDiaCita" type="datetime-local" class="form-control" placeholder="07-03-2017">
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