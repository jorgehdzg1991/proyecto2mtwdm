<div id="contenedor-modulo">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        <div class="panel panel-primary">
            {{ form('login/start', 'class': 'form-horizontal', 'style': 'margin-bottom: 0px !important;') }}
            <div class="panel-body">
                <h4 class="text-center" style="margin-bottom: 25px;">Bienvenido</h4>
                {{ flash.output() }}

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {{ text_field('login', 'class': 'form-control', 'placeholder': 'Escribe tu nombre de usuario') }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            {{ password_field('passwd', 'class': 'form-control', 'placeholder': 'Escribe tu contraseña') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="pull-right">
                    {{ submit_button('Iniciar', 'class': 'btn btn-primary') }}
                </div>
            </div>
            {{ endForm() }}
        </div>
    </div>
</div>
