<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Planner Doc</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Proyecto final">
    <meta name="author" content="Tecnologías WEB">

    {{ stylesheet_link('css/styles.min.css?=113') }}
    {{ stylesheet_link('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600') }}

</head>
<body class="focusedform">

<div class="verticalcenter">
    <a href="">{{ image('img/logo-big.png', 'alt': 'logo', 'class': 'brand') }}</a>
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4 class="text-center" style="margin-bottom: 25px;">Bienvenido</h4>
            <form action="#" class="form-horizontal">
                <div class="form-group">
                    <label for="email" class="control-label col-sm-4" style="text-align: left;">Correo:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" placeholder="Escribe tu correo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label col-sm-4" style="text-align: left;">Contraseña:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" placeholder="Contraseña">
                    </div>
                </div>

                <a href="" class="btn btn-primary btn-block">Iniciar</a>
            </form>
        </div>

    </div>
</div>

</body>
</html>