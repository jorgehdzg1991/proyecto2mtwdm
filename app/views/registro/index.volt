<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-6">
            <div class="contenedor-formulario">
                <h1>¡Crea tu cuenta de forma gratuita!</h1>
                <hr>
                {{ flash.output() }}
                <h3>Datos personales</h3>
                {{ form('registro/registrar', 'method': 'post') }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ text_field('nombre', 'class': 'form-control', 'placeholder': 'Nombre de pila', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ text_field('apellido_paterno', 'class': 'form-control', 'placeholder': 'Apellido paterno', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ text_field('apellido_materno', 'class': 'form-control', 'placeholder': 'Apellido materno', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ email_field('correo', 'class': 'form-control', 'placeholder': 'Correo electrónico', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ text_field('especialidad', 'class': 'form-control', 'placeholder': 'Especialidad', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <hr>
                <h3>Inicio de sesión</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ text_field('login', 'class': 'form-control', 'placeholder': 'Nombre de inicio de sesión', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ password_field('passwd', 'class': 'form-control', 'placeholder': 'Contraseña', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            {{ password_field('repasswd', 'class': 'form-control', 'placeholder': 'Vuelve a escribir la contraseña', 'required': 'required') }}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="btn-toolbar">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> ¡Listo! Crea mi cuenta</button>
                    </div>
                </div>
                {{ endForm() }}
            </div>
        </div>
    </div>
</div>