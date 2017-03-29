<?php

class RegistroController extends Phalcon\Mvc\Controller
{
    private $moduleName;
    private $moduleCssLinks;
    private $moduleJavaScripts;

    protected function initialize()
    {
        $this->moduleName = 'Registro';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [];

        $this->moduleJavaScripts = [];

        $this->view->moduleCssLinks = $this->moduleCssLinks;
        $this->view->moduleJavaScripts = $this->moduleJavaScripts;
    }

    public function indexAction()
    {

    }

}