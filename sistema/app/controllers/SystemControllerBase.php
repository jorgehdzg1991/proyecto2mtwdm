<?php

use Phalcon\Mvc\Controller;

abstract class SystemControllerBase extends Controller
{
    protected $moduleName;
    protected $moduleCssLinks;
    protected $moduleJavaScripts;

    protected function initialize()
    {
        $this->tag->prependTitle('MTWDM | ');
        $this->view->setTemplateAfter('system');

        $this->view->moduleName = $this->moduleName;
        $this->view->action = null;

        $this->loadModuleCssLinks();
        $this->loadModuleJavaScripts();
    }

    private function loadModuleCssLinks()
    {
        $this->view->moduleCssLinks = $this->moduleCssLinks;
    }

    private function loadModuleJavaScripts()
    {
        $this->view->moduleJavaScripts = $this->moduleJavaScripts;
    }
}
