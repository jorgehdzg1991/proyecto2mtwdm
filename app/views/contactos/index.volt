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
                                <tbody>
                                {% for doctor_vinculado in doctores_vinculados %}

                                    <tr>
                                        <td>{{ doctor_vinculado['nombre'] }}</td>
                                        <td>{{ doctor_vinculado['especialidad'] }}</td>
                                        <td>{{ doctor_vinculado['telefono'] }}</td>
                                        <td>{{ doctor_vinculado['correo'] }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" title="Desvincular contacto"><i class="fa fa-times-circle"></i></button>
                                        </td>
                                    </tr>

                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="conectar" class="tab-pane">
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
                                <tbody>
                                {% for doctor in doctores %}

                                    <tr>
                                        <td>{{ doctor['nombre'] }}</td>
                                        <td>{{ doctor['especialidad'] }}</td>
                                        <td>{{ doctor['telefono'] }}</td>
                                        <td>{{ doctor['correo'] }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" title="Vincular contacto"><i class="fa fa-plus-circle"></i></button>
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