<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{ get_title() }}

        {{ stylesheet_link('http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Montserrat:400,700|Crete+Round:400italic') }}
        {{ stylesheet_link('css/bootstrap.css') }}
        {{ stylesheet_link('css/style.css') }}
        {{ stylesheet_link('css/medical/medical.css') }}
        {{ stylesheet_link('css/dark.css') }}
        {{ stylesheet_link('css/font-icons.css') }}
        {{ stylesheet_link('css/medical/medical-icons.css') }}
        {{ stylesheet_link('css/animate.css') }}
        {{ stylesheet_link('css/magnific-popup.css') }}
        {{ stylesheet_link('css/medical/fonts.css') }}
        {{ stylesheet_link('css/responsive.css') }}
        {{ stylesheet_link('css/colors.php?color=DE6262') }}

    </head>
    <body class="stretched" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='http://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='http://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

        <div id="wrapper" class="clearfix">
            <!-- Aquí se despliega el contenido de la aplicación -->
            {{ content() }}
        </div>

        <!-- Go To Top
	    ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        {{ javascript_include('js/jquery.js') }}
        {{ javascript_include('js/plugins.js') }}
        {{ javascript_include('js/functions.js') }}

        <script type="text/javascript">

            $("#template-medical-form").validate({
                submitHandler: function(form) {
                    var formButton = $(form).find('button'),
                        formButtonText = formButton.html();

                    formButton.prop('disabled', true).html('<i class="icon-line-loader icon-spin norightmargin"></i>');
                    $(form).ajaxSubmit({
                        target: '#medical-form-result',
                        success: function() {
                            formButton.prop('disabled', false).html(formButtonText);
                            $(form).find('.form-control').val('');
                            $('#medical-form-result').attr('data-notify-msg', $('#medical-form-result').html()).html('');
                            SEMICOLON.widget.notifications($('#medical-form-result'));
                        }
                    });
                }
            });

        </script>
    </body>
</html>
