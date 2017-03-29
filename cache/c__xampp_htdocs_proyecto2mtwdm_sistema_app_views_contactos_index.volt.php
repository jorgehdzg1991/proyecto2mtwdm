<div class="row" style="margin-bottom: 15px;">
    <div class="col-xs-12">
        <div class="btn-toolbar text-right">
            <?= $this->tag->linkTo(['contactos/nuevo', '<i class="fa fa-plus"></i> Nuevo contacto', 'class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Agenda de contactos</h4>
            </div>
            <div class="panel-body">
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
                        <?php foreach ($doctores as $doctor) { ?>

                            <tr>
                                <td><?= $doctor['nombre'] ?></td>
                                <td><?= $doctor['especialidad'] ?></td>
                                <td><?= $doctor['telefono'] ?></td>
                                <td><?= $doctor['correo'] ?></td>
                                <td>
                                    <button class="btn btn-default btn-sm" title="Editar datos de contacto"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-sm" title="Eliminar contacto"><i class="fa fa-trash-o"></i></button>
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