<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?= $this->tag->linkTo(['doctores', 'Go Back']) ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create doctores
    </h1>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['doctores/create', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

<div class="form-group">
    <label for="fieldPersonasId" class="col-sm-2 control-label">Personas</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['personas_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldPersonasId']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldEspecialidad" class="col-sm-2 control-label">Especialidad</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['especialidad', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldEspecialidad']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldConfiguracionesId" class="col-sm-2 control-label">Configuraciones</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['configuraciones_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldConfiguracionesId']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldCredencialesId" class="col-sm-2 control-label">Credenciales</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['credenciales_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldCredencialesId']) ?>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?= $this->tag->submitButton(['Save', 'class' => 'btn btn-default']) ?>
    </div>
</div>

</form>
