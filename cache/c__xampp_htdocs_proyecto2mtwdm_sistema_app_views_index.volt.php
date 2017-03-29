<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?= $this->tag->getTitle() ?>

        <?= $this->tag->stylesheetLink('css/styles.css') ?>
        <?= $this->tag->stylesheetLink('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600') ?>

        <?= $this->resources->loadCssLinks($moduleCssLinks) ?>
    </head>
    <body class=" ">
        <!-- Aquí se renderiza el contenido de la aplicación -->
        <?= $this->getContent() ?>

        <?= $this->tag->javascriptInclude('js/jquery-1.10.2.min.js') ?>
        <?= $this->tag->javascriptInclude('js/jqueryui-1.10.3.min.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/enquire.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.cookie.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.nicescroll.min.js') ?>
        <?= $this->tag->javascriptInclude('js/placeholdr.js') ?>

        <?= $this->resources->loadJavaScripts($moduleJavaScripts) ?>

        <?= $this->tag->javascriptInclude('js/application.js') ?>
    </body>
</html>
