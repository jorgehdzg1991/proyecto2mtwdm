<?php

use Phalcon\Mvc\Controller;

abstract class SystemControllerBase extends Controller
{
    protected $moduleName;
    protected $moduleCssLinks;
    protected $moduleJavaScripts;

    protected function initialize()
    {
        if (!$this->validateSessionAuth()) {
            $this->flash->error('Debes iniciar sesión para ver este contenido');

            $this->response->redirect('login');
        } else {
            $this->view->auth = $this->session->get('auth');
        }

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

    private function validateSessionAuth()
    {
        return $this->session->has('auth');
    }
}
