<div class="page-header">
    <h1>
        Search doctores
    </h1>
    <p>
        {{ link_to("doctores/new", "Create doctores") }}
    </p>
</div>

{{ content() }}

{{ form("doctores/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        {{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPersonasId" class="col-sm-2 control-label">Personas</label>
    <div class="col-sm-10">
        {{ text_field("personas_id", "type" : "numeric", "class" : "form-control", "id" : "fieldPersonasId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEspecialidad" class="col-sm-2 control-label">Especialidad</label>
    <div class="col-sm-10">
        {{ text_field("especialidad", "size" : 30, "class" : "form-control", "id" : "fieldEspecialidad") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldConfiguracionesId" class="col-sm-2 control-label">Configuraciones</label>
    <div class="col-sm-10">
        {{ text_field("configuraciones_id", "type" : "numeric", "class" : "form-control", "id" : "fieldConfiguracionesId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCredencialesId" class="col-sm-2 control-label">Credenciales</label>
    <div class="col-sm-10">
        {{ text_field("credenciales_id", "type" : "numeric", "class" : "form-control", "id" : "fieldCredencialesId") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Search', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
