<div class="verticalcenter">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        <div class="text-center" style="margin-bottom: 15px;">
            <?= $this->tag->image(['img/logo-big.png', 'alt' => 'logo', 'class' => 'brand', 'style' => 'text-align: center']) ?>
        </div>
        <div class="panel panel-primary">
            <?= $this->tag->form(['login/start', 'class' => 'form-horizontal', 'style' => 'margin-bottom: 0px !important;']) ?>
            <div class="panel-body">
                <h4 class="text-center" style="margin-bottom: 25px;">Bienvenido</h4>
                <?= $this->flash->output() ?>

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <?= $this->tag->textField(['login', 'class' => 'form-control', 'placeholder' => 'Escribe tu nombre de usuario']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <?= $this->tag->passwordField(['passwd', 'class' => 'form-control', 'placeholder' => 'Escribe tu contraseña']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="pull-right">
                    <?= $this->tag->submitButton(['Iniciar', 'class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?= $this->tag->endform() ?>
        </div>
    </div>
</div>
