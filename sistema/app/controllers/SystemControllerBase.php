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

        $this->defineModuleCssLinks();
        $this->defineModuleJavaScripts();
    }

    protected function defineModuleCssLinks()
    {
        $this->view->moduleCssLinks = $this->moduleCssLinks;
    }

    protected function defineModuleJavaScripts()
    {
        $this->view->moduleJavaScripts = $this->moduleJavaScripts;
    }
}
