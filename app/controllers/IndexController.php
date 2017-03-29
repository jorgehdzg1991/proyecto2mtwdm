<?php

class IndexController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Tablero de inicio';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'plugins//.css'
        ];
        $this->moduleJavaScripts = [
            'plugins//.min.js'
        ];

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

