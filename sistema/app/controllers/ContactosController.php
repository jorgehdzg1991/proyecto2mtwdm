<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 24/02/2017
 * Time: 09:47 AM
 */
class ContactosController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Mis contactos';
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