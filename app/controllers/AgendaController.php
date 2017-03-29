<?php

class AgendaController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Mi agenda';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'plugins/fullcalendar/fullcalendar.css',
            'plugins/codeprettifier/prettify.css',
            'plugins/form-toggle/toggles.css'
        ];

        $this->moduleJavaScripts = [
            'plugins/fullcalendar/fullcalendar.min.js',
            'plugins/codeprettifier/prettify.js',
            'plugins/form-toggle/toggle.min.js',
            'js/modules/agenda.js'
        ];

        parent::initialize();
    }

    public function indexAction()
    {

    }
}