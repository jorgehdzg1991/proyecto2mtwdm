<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 24/02/2017
 * Time: 09:49 AM
 */
class PacientesController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Mis pacientes';
        $this->tag->setTitle($this->moduleName);
        parent::initialize();
    }

    protected function defineModuleCssLinks()
    {
        parent::defineModuleCssLinks();
    }

    protected function defineModuleJavaScripts()
    {
        parent::defineModuleJavaScripts();
    }

    public function indexAction()
    {

    }
}