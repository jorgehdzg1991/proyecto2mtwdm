<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{ get_title() }}

        {{ stylesheet_link('css/styles.css') }}
        {{ stylesheet_link('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600') }}
    </head>
    <body class=" ">
        <!-- Aquí se renderiza el contenido de la aplicación -->
        {{ content() }}

        {{ javascript_include('js/jquery-1.10.2.min.js') }}
        {{ javascript_include('js/jqueryui-1.10.3.min.js') }}
        {{ javascript_include('js/bootstrap.min.js') }}
        {{ javascript_include('js/enquire.js') }}
        {{ javascript_include('js/jquery.cookie.js') }}
        {{ javascript_include('js/jquery.nicescroll.min.js') }}
        {{ javascript_include('js/placeholdr.js') }}
        {{ javascript_include('js/application.js') }}
    </body>
</html>
