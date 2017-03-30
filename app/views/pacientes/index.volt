<div class="row" style="margin-bottom: 15px;">
    <div class="col-xs-12">
        <div class="btn-toolbar text-right">
            {{ link_to('pacientes/nuevo', '<i class="fa fa-plus"></i> Nuevo paciente', 'class': 'btn btn-primary') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Agenda de pacientes</h4>
            </div>
            <div class="panel-body">
                <div class="alert alert-info alerta-visibilidad">
                    <i class="fa fa-info"></i> Recorrer tabla a la derecha para visualizar las acciones
                </div>
                <div class="table-responsive">
                    <table class="table table-striped datatables">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Número de contacto</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for paciente in pacientes %}

                            <tr>
                                <td>{{ [paciente['nombre'], paciente['apellido_paterno'], paciente['apellido_materno']] | join(' ') }}</td>
                                <td>{{ paciente['telefono'] }}</td>
                                <td>
                                    <button class="btn btn-default btn-sm" title="Ver datos de paciente" onclick="verPaciente('{{ url('pacientes/ver/' ~ paciente['id']) }}')"><i class="fa fa-eye"></i></button>
                                    <a class="btn btn-default btn-sm" href="{{ url('pacientes/editar/' ~ paciente['id']) }}" title="Editar datos de paciente"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-default btn-sm" href="{{ url('pacientes/historia/' ~ paciente['id']) }}" title="Modificar historia clínica"><i class="fa fa-file-o"></i></a>
                                    <button class="btn btn-danger btn-sm" title="Eliminar paciente" onclick="eliminarPaciente('{{ url('pacientes/eliminar/' ~ paciente['id']) }}')"><i class="fa fa-trash-o"></i></button>
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