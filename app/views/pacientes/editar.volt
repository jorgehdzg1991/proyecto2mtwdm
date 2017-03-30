<div class="row" style="margin-bottom: 15px;">
    <div class="col-xs-12">
        <div class="btn-toolbar text-right">
            {{ link_to('pacientes', '<i class="fa fa-arrow-left"></i> Regresar', 'class': 'btn btn-default') }}
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
                        <i class="fa fa-info"></i> Modifique los datos del paciente que le interese y haga click en "Guardar"
                    </div>
                    {{ form('pacientes/guardareditar', 'method': 'post', 'id': 'frmPaciente') }}

                    {{ hidden_field('id', 'value': paciente['id']) }}
                    {{ hidden_field('personas_id', 'value': paciente['personas_id']) }}

                    <div class="form-group">
                        <label for="txtNombre" class="control-label col-sm-3">Nombre:</label>
                        <div class="col-sm-6">
                            {{ text_field('nombre', 'class': 'form-control', 'value': paciente['nombre'], 'required': 'required') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtApellidoPaterno" class="control-label col-sm-3">Apellido paterno:</label>
                        <div class="col-sm-6">
                            {{ text_field('apellido_paterno', 'class': 'form-control', 'value': paciente['apellido_paterno'], 'required': 'required') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtApellidoMaterno" class="control-label col-sm-3">Apellido materno:</label>
                        <div class="col-sm-6">
                            {{ text_field('apellido_materno', 'class': 'form-control', 'value': paciente['apellido_materno'], 'required': 'required') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selSexo" class="control-label col-sm-3">Sexo:</label>
                        <div class="col-xs-12 col-md-3">
                            <select name="sexo" id="sexo" style="width: 100%;">
                            {% if paciente['sexo'] == 'H' %}
                                <option value="H" selected>Masculino</option>
                                <option value="M">Femenino</option>
                            {% else %}
                                <option value="H">Masculino</option>
                                <option value="M" selected>Femenino</option>
                            {% endif %}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtEdad" class="control-label col-sm-3">Fecha de nacimiento:</label>
                        <div class="col-xs-12 col-md-3">
                            {{ text_field('fecha_nacimiento', 'class': 'form-control', 'value': paciente['fecha_nacimiento'], 'required': 'required') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtPeso" class="control-label col-sm-3">Peso (kg):</label>
                        <div class="col-xs-12 col-md-2">
                            {{ numeric_field('peso', 'class': 'form-control', 'value': paciente['peso']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtEstatura" class="control-label col-sm-3">Estatura (cm):</label>
                        <div class="col-xs-12 col-md-2">
                            {{ numeric_field('estatura', 'class': 'form-control', 'value': paciente['estatura']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtNacionalidad" class="control-label col-sm-3">Nacionalidad:</label>
                        <div class="col-sm-6">
                            {{ text_field('nacionalidad', 'class': 'form-control', 'value': paciente['nacionalidad']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono" class="control-label col-sm-3">Número telefónico:</label>
                        <div class="col-sm-6">
                            {{ numeric_field('telefono', 'class': 'form-control', 'value': paciente['telefono']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtCorreo" class="control-label col-sm-3">Correo electrónico:</label>
                        <div class="col-sm-6">
                            {{ email_field('correo', 'class': 'form-control', 'value': paciente['correo']) }}
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="btn-toolbar">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                    {{ endForm() }}
                </div>
            </div>
        </div>
    </div>
</div>