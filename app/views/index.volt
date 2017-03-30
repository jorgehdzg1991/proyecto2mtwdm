<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{ get_title() }}

        {{ stylesheet_link('css/styles.css') }}
        {{ stylesheet_link('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600') }}

        {{ resources.loadCssLinks(moduleCssLinks) }}

        <style>
            .alerta-visibilidad {
                display: none;
            }

            @media screen and (max-width:992px) {
                .dataTables_wrapper {
                    min-width: 650px !important;
                    padding: 5px;
                }

                .alerta-visibilidad {
                    display: block;
                }
            }
        </style>
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
        {{ javascript_include('plugins/bootbox/bootbox.min.js') }}
        {{ javascript_include('plugins/form-datepicker/js/bootstrap-datepicker.js') }}

        {{ resources.loadJavaScripts(moduleJavaScripts) }}

        {{ javascript_include('js/application.js') }}
    </body>
</html>
