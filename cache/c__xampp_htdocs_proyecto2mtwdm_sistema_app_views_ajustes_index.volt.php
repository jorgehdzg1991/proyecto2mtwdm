<?= $this->tag->hiddenField(['hdnLocation', 'value' => 'index']) ?>
<?= $this->tag->hiddenField(['hdnUrlFormularioNuevo', 'value' => 'ajustes/formularionuevotitulo']) ?>
<div class="row">
    <div class="col-xs-12">
         <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="options">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#cuenta" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                <span class="visible-md visible-lg">Cuenta</span>
                            </a>
                        </li>
                        <li>
                            <a href="#horario" data-toggle="tab">
                                <i class="fa fa-clock-o"></i>
                                <span class="visible-md visible-lg">Horario</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="cuenta" class="tab-pane active">
                        <div class="alert alert-info">
                            <i class="fa fa-info-circle"></i>
                            Esta es la configuración de su cuenta. Haga los cambios necesarios y despues en guardar para actualizar su cuenta.
                        </div>
                        <div class="form-horizontal">
                            <h4>Información básica</h4>
                            <div class="form-group">
                                <label for="txtNombre" class="control-label col-sm-3">Nombre completo</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtNombre', 'class' => 'form-control', 'value' => $cuenta['nombre']]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="selEspecialidad" class="control-label col-sm-3">Especialidad</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->hiddenField(['selEspecialidad', 'style' => 'width:100%', 'value' => $cuenta['especialidades']]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtBio" class="control-label col-sm-3">Biografía</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textArea(['txtBio', '', 'class' => 'form-control', 'cols' => '30', 'rows' => '10', 'value' => $cuenta['bio']]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Foto de perfil</label>
                                <div class="col-sm-6">
                                    <div class="fileinput <?= ($cuenta['foto'] != '' ? 'fileinput-exists' : 'fileinput-new') ?>" data-provides="fileinput">
                                        <div id="fupFotoContainer" class="fileinput-preview thumbnail" style="width: 180px; height: 200px;">
                                            <?= ($cuenta['foto'] != '' ? $this->tag->image([$cuenta['foto']]) : '') ?>
                                        </div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Seleccionar una foto</span>
                                                <span class="fileinput-exists">Cambiar foto</span>
                                                <?= $this->tag->fileField(['fupFoto']) ?>
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar foto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Formación académica</h4>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <?= $this->tag->hiddenField(['hdnFormacion', 'value' => json_encode($cuenta['formacion'])]) ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="margin-bottom:0;">
                                            <thead>
                                            <tr>
                                                <th>Título obtenido</th>
                                                <th>Universidad</th>
                                                <th>Año</th>
                                                <th>Cédula profesional</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tblFormacion"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <div class="btn-toolbar text-right">
                                        <button class="btn btn-default btn-sm" onclick="$('body').toggleClass('show-rightbar')"><i class="fa fa-plus"></i> Agregar nuevo título</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Configuración de citas</h4>
                            <div class="form-group">
                                <label for="txtPrecio" class="control-label col-sm-3">Precio</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <?= $this->tag->numericField(['txtPrecio', 'class' => 'form-control', 'value' => $cuenta['precio']]) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDuracion" class="control-label col-sm-3">Duración promedio (minutos)</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        <?= $this->tag->numericField(['txtDuracion', 'class' => 'form-control', 'value' => $cuenta['duracion']]) ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="btn-toolbar">
                                        <?= $this->tag->submitButton(['Guardar configuración', 'class' => 'btn btn-primary']) ?>
                                        <button class="btn btn-default" id="btnRestablecer">Descartar cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="horario" class="tab-pane">
                        <div class="alert alert-info">
                            <i class="fa fa-info-circle"></i>
                            Estos son los horarios actualmente configurados.
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtLunes" class="control-label col-sm-3">Lunes</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtLunes', 'class' => 'form-control', 'value' => $horario['lunes'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMartes" class="control-label col-sm-3">Martes</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtMartes', 'class' => 'form-control', 'value' => $horario['martes'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMiercoles" class="control-label col-sm-3">Miércoles</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtMiercoles', 'class' => 'form-control', 'value' => $horario['miercoles'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtJueves" class="control-label col-sm-3">Jueves</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtJueves', 'class' => 'form-control', 'value' => $horario['jueves'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtViernes" class="control-label col-sm-3">Viernes</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtViernes', 'class' => 'form-control', 'value' => $horario['viernes'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSabado" class="control-label col-sm-3">Sábado</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtSabado', 'class' => 'form-control', 'value' => $horario['sabado'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDomingo" class="control-label col-sm-3">Domingo</label>
                                <div class="col-sm-6">
                                    <?= $this->tag->textField(['txtDomingo', 'class' => 'form-control', 'value' => $horario['domingo'], 'readonly' => 'true']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>