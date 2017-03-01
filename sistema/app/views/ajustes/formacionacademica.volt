{{ hidden_field('hdnLocation', 'value': 'formacionacademica') }}
{{ hidden_field('hdnUrlFormularioNuevo', 'value': url('ajustes/formularionuevotitulo')) }}
<div class="row" style="margin-bottom: 25px;">
    <div class="col-xs-12 text-right">
        <div class="btn-toolbar">
            {{ link_to('ajustes', '<i class="fa fa-arrow-left"></i> Regresar', 'class': 'btn btn-default') }}
            <button class="btn btn-primary" onclick="$('body').toggleClass('show-rightbar')"><i class="fa fa-plus"></i> Agregar nuevo título</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Formación académica</h4>
            </div>
            <div class="panel-body">
                {{ hidden_field('hdnFormacion', 'value': formacion | json_encode) }}
                <div class="table-responsive">
                    <table class="table table-striped">
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
    </div>
</div>