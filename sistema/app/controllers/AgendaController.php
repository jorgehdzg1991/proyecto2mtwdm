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