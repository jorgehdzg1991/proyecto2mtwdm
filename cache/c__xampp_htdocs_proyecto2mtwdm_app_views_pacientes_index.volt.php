<div class="row" style="margin-bottom: 15px;">
    <div class="col-xs-12">
        <div class="btn-toolbar text-right">
            <?= $this->tag->linkTo(['pacientes/nuevo', '<i class="fa fa-plus"></i> Nuevo paciente', 'class' => 'btn btn-primary']) ?>
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
                        <?php foreach ($pacientes as $paciente) { ?>

                            <tr>
                                <td><?= join([$paciente['nombre'], $paciente['apellido_paterno'], $paciente['apellido_materno']], ' ') ?></td>
                                <td><?= $paciente['telefono'] ?></td>
                                <td>
                                    <button class="btn btn-default btn-sm" title="Ver datos de paciente" onclick="verPaciente('<?= $this->url->get('pacientes/ver/' . $paciente['id']) ?>')"><i class="fa fa-eye"></i></button>
                                    <a class="btn btn-default btn-sm" href="<?= $this->url->get('pacientes/editar/' . $paciente['id']) ?>" title="Editar datos de paciente"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-default btn-sm" href="<?= $this->url->get('pacientes/historia/' . $paciente['id']) ?>" title="Modificar historia clínica"><i class="fa fa-file-o"></i></a>
                                    <button class="btn btn-danger btn-sm" title="Eliminar paciente" onclick="eliminarPaciente('<?= $this->url->get('pacientes/eliminar/' . $paciente['id']) ?>')"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>