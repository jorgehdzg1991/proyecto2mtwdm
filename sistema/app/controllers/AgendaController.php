<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 24/02/2017
 * Time: 09:43 AM
 */
class AgendaController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Mi agenda';
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

    public function agendarcitaAction()
    {

    }
}