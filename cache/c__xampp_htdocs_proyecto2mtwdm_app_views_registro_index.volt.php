<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-6">
            <div class="contenedor-formulario">
                <h1>¡Crea tu cuenta de forma gratuita!</h1>
                <hr>
                <?= $this->flash->output() ?>
                <h3>Datos personales</h3>
                <?= $this->tag->form(['registro/registrar', 'method' => 'post']) ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->textField(['nombre', 'class' => 'form-control', 'placeholder' => 'Nombre de pila', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->textField(['apellido_paterno', 'class' => 'form-control', 'placeholder' => 'Apellido paterno', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->textField(['apellido_materno', 'class' => 'form-control', 'placeholder' => 'Apellido materno', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->emailField(['correo', 'class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->textField(['especialidad', 'class' => 'form-control', 'placeholder' => 'Especialidad', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <hr>
                <h3>Inicio de sesión</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->textField(['login', 'class' => 'form-control', 'placeholder' => 'Nombre de inicio de sesión', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->passwordField(['passwd', 'class' => 'form-control', 'placeholder' => 'Contraseña', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?= $this->tag->passwordField(['repasswd', 'class' => 'form-control', 'placeholder' => 'Vuelve a escribir la contraseña', 'required' => 'required']) ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="btn-toolbar">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> ¡Listo! Crea mi cuenta</button>
                    </div>
                </div>
                <?= $this->tag->endform() ?>
            </div>
        </div>
    </div>
</div>