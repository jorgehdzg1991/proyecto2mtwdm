<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Historia clínica: <b><?= $nombre_completo ?></b></h4>
            </div>
            <div class="panel-body">
                <?= $this->tag->form(['pacientes/guardarhistoria', 'method' => 'post']) ?>

                <?= $this->tag->linkTo(['pacientes', '<i class="fa fa-arrow-left"></i> Regresar sin guardar', 'class' => 'btn btn-default']) ?>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                <hr>
                <?= $this->tag->hiddenField(['id', 'value' => $paciente['id']]) ?>
                <textarea name="historia_clinica" id="historia_clinica" cols="80" rows="20" class="ckeditor"><?= $paciente['historia_clinica'] ?></textarea>

                <?= $this->tag->endform() ?>
            </div>
        </div>
    </div>
</div>