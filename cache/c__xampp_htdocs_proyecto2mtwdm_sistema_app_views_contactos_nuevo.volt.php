<div class="row" style="margin-bottom: 15px;">
    <div class="col-xs-12">
        <div class="btn-toolbar text-right">
            <?= $this->tag->linkTo(['contactos', '<i class="fa fa-arrow-left"></i> Regresar', 'class' => 'btn btn-default']) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Registrar un nuevo contacto</h4>
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="alert alert-info">
                        <i class="fa fa-info"></i> Ingrese los datos del paciente y una vez terminado, haga clic en "guardar".
                    </div>
                    <div class="form-group">
                        <label for="txtNombre" class="control-label col-sm-3">Nombre:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['txtNombre', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selEspecialidad" class="control-label col-sm-3">Especialidad:</label>
                        <div class="col-xs-12 col-md-3">
                            <select name="selEspecialidad" id="selEspecialidad" class="form-control">
                                <?php foreach ($especialidades as $especialidad) { ?>
                                    <option value="<?= $especialidad['valor'] ?>"><?= $especialidad['texto'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono" class="control-label col-sm-3">Número telefónico:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->numericField(['txtTelefono', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtCorreo" class="control-label col-sm-3">Correo electrónico:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->emailField(['txtCorreo', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="btn-toolbar">
                            <button class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>