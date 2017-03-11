<div class="verticalcenter">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        <div class="text-center" style="margin-bottom: 15px;">
            {{ image('img/logo-big.png', 'alt': 'logo', 'class': 'brand', 'style': 'text-align: center') }}
        </div>
        <div class="panel panel-primary">
            <div class="panel-body">
                <h4 class="text-center" style="margin-bottom: 25px;">Bienvenido</h4>
                <form action="#" class="form-horizontal" style="margin-bottom: 0px !important;">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="username" placeholder="Escribe tu correo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <div class="pull-right">
                    {{ link_to('index', 'Iniciar', 'class': 'btn btn-primary') }}
                </div>
            </div>
        </div>
    </div>
</div>





