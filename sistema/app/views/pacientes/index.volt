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
                                <td>{{ [paciente['nombre'], paciente['apellidoPaterno'], paciente['apellidoMaterno']] | join(' ') }}</td>
                                <td>{{ paciente['telefono'] }}</td>
                                <td>
                                    <button class="btn btn-default btn-sm" title="Ver datos de paciente"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-default btn-sm" title="Editar datos de paciente"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-default btn-sm" title="Modificar historia clínica"><i class="fa fa-file-o"></i></button>
                                    <button class="btn btn-danger btn-sm" title="Eliminar paciente"><i class="fa fa-trash-o"></i></button>
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