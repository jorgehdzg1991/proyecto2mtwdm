<?php

class RegistroController extends PageControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Registro';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'css/no-sistema.css'
        ];

        $this->moduleJavaScripts = [];

        parent::initialize();
    }

    public function indexAction()
    {

    }

}