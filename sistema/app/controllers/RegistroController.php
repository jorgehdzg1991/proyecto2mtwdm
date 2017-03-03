<?php

class RegistroController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Registro';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'plugins/fullcalendar/fullcalendar.css'
        ];

        $this->moduleJavaScripts = [
            'plugins/fullcalendar/fullcalendar.min.js',
            'js/modules/agenda.js'
        ];

        parent::initialize();
    }

    public function indexAction()
    {

    }

}