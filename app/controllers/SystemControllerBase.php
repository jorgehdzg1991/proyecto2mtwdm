<?php

use Phalcon\Mvc\Controller;

/**
 * Base de todos los controladores del sistema
 */
abstract class SystemControllerBase extends Controller
{
    /**
     * @var string Nombre del módulo a cargar
     */
    protected $moduleName;

    /**
     * @var array Conjunto de Css a cargar en el módulo
     */
    protected $moduleCssLinks;

    /**
     * @var array Conjunto de JavaScripts a cargar en el módulo
     */
    protected $moduleJavaScripts;

    /**
     * @var array Datos de sesión del usuario
     */
    protected $auth;

    /**
     * Inicializa los módulos del sistema
     */
    protected function initialize()
    {
        if (!$this->validateSessionAuth()) {
            $this->flash->error('Debes iniciar sesión para ver este contenido');

            $this->response->redirect('login');
        } else {
            $this->auth = $this->session->get('auth');
            $this->view->auth = $this->auth;
        }

        $this->tag->prependTitle('MTWDM | ');
        $this->view->setTemplateAfter('system');

        $this->view->moduleName = $this->moduleName;
        $this->view->action = null;

        $this->loadModuleCssLinks();
        $this->loadModuleJavaScripts();
    }

    /**
     * Pasa a la vista las ligas a los Css del módulo
     */
    private function loadModuleCssLinks()
    {
        $this->view->moduleCssLinks = $this->moduleCssLinks;
    }

    /**
     * Pasa a la vista las ligas a los JavaScripts del módulo
     */
    private function loadModuleJavaScripts()
    {
        $this->view->moduleJavaScripts = $this->moduleJavaScripts;
    }

    /**
     * Determina si está iniciada la sesión o no
     * @return bool Estatus de la sesión
     */
    private function validateSessionAuth()
    {
        return $this->session->has('auth');
    }
}
