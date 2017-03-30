<div class="row" style="margin-bottom: 15px;">
    <div class="col-xs-12">
        <div class="btn-toolbar text-right">
            <?= $this->tag->linkTo(['pacientes', '<i class="fa fa-arrow-left"></i> Regresar', 'class' => 'btn btn-default']) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Registrar un nuevo paciente</h4>
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="alert alert-info">
                        <i class="fa fa-info"></i> Ingrese los datos del paciente y una vez terminado, haga clic en "guardar".
                    </div>
                    <?= $this->tag->form(['pacientes/guardar', 'method' => 'post', 'id' => 'frmPaciente']) ?>
                    <div class="form-group">
                        <label for="txtNombre" class="control-label col-sm-3">Nombre:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['nombre', 'class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtApellidoPaterno" class="control-label col-sm-3">Apellido paterno:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['apellido_paterno', 'class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtApellidoMaterno" class="control-label col-sm-3">Apellido materno:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['apellido_materno', 'class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selSexo" class="control-label col-sm-3">Sexo:</label>
                        <div class="col-xs-12 col-md-3">
                            <?= $this->tag->select(['sexo', $sexo, 'using' => ['valor', 'texto'], 'style' => 'width:100%']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtEdad" class="control-label col-sm-3">Fecha de nacimiento:</label>
                        <div class="col-xs-12 col-md-3">
                            <?= $this->tag->textField(['fecha_nacimiento', 'class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtPeso" class="control-label col-sm-3">Peso (kg):</label>
                        <div class="col-xs-12 col-md-2">
                            <?= $this->tag->numericField(['peso', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtEstatura" class="control-label col-sm-3">Estatura (cm):</label>
                        <div class="col-xs-12 col-md-2">
                            <?= $this->tag->numericField(['estatura', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtNacionalidad" class="control-label col-sm-3">Nacionalidad:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['nacionalidad', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono" class="control-label col-sm-3">Número telefónico:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->numericField(['telefono', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtCorreo" class="control-label col-sm-3">Correo electrónico:</label>
                        <div class="col-sm-6">
                            <?= $this->tag->emailField(['correo', 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="btn-toolbar">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                    <?= $this->tag->endform() ?>
                </div>
            </div>
        </div>
    </div>
</div>