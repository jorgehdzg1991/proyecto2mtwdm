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
        $registro = [
            'lunes' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'martes' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'miercoles' => '11:00 AM a 2:30 PM',
            'jueves' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'viernes' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'sabado' => '11:00 AM a 2:30 PM',
            'domingo' => 'No labora'
        ];

    }

    public function agendarcitaAction()
    {

    }
}