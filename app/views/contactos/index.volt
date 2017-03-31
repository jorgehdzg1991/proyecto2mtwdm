<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="options">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#contactos" data-toggle="tab">
                                <i class="fa fa-users"></i>
                                <span class="visible-md visible-lg">Mis contactos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#conectar" data-toggle="tab">
                                <i class="fa fa-plus-square-o"></i>
                                <span class="visible-md visible-lg">Conectar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="contactos" class="tab-pane active">
                        <h3>Mis contactos</h3>
                        <hr>
                        <div class="alert alert-info alerta-visibilidad">
                            <i class="fa fa-info"></i> Recorrer tabla a la derecha, y pulsar sobre el botón "desvincular".
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped datatables">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Especialidad</th>
                                    <th>Número de teléfono</th>
                                    <th>Correo electrónico</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody id="tblVinculados">
                                {% for doctor_vinculado in doctores_vinculados %}

                                    <tr>
                                        <td>Dr. {{ [doctor_vinculado['nombre'], doctor_vinculado['apellido_paterno'], doctor_vinculado['apellido_materno']] | join(' ') }}</td>
                                        <td>{{ doctor_vinculado['especialidad'] }}</td>
                                        <td>{{ doctor_vinculado['telefono'] }}</td>
                                        <td>{{ doctor_vinculado['correo'] }}</td>
                                        <td>
                                            <button onclick="eliminarVinculo('{{ url('contactos/desvincular/' ~ doctor_vinculado['id']) }}')" class="btn btn-danger btn-sm" title="Desvincular contacto"><i class="fa fa-times-circle"></i></button>
                                        </td>
                                    </tr>

                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="conectar" class="tab-pane">
                        <h3>Conectar con otros doctores</h3>
                        <hr>
                        <div class="alert alert-info alerta-visibilidad">
                            <i class="fa fa-info"></i> Recorrer tabla a la derecha, y pulsar sobre el botón "vincular".
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped datatables">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Especialidad</th>
                                    <th>Número de teléfono</th>
                                    <th>Correo electrónico</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody id="tblNoVinculados">
                                {% for doctor in doctores %}

                                    <tr>
                                        <td>Dr. {{ [doctor['nombre'], doctor['apellido_paterno'], doctor['apellido_materno']] | join(' ') }}</td>
                                        <td>{{ doctor['especialidad'] }}</td>
                                        <td>{{ doctor['telefono'] }}</td>
                                        <td>{{ doctor['correo'] }}</td>
                                        <td>
                                            <a href="{{ url('contactos/vincular/' ~ doctor['id']) }}" class="btn btn-primary btn-sm" title="Vincular contacto"><i class="fa fa-plus-circle"></i></a>
                                        </td>
                                    </tr>

                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>