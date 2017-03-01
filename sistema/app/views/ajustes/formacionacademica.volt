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
                        </tr>
                        </thead>
                        <tbody id="tblFormacion"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>