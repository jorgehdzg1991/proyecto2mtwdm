<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 29/03/2017
 * Time: 08:48 PM
 */
class PageControllerBase extends Phalcon\Mvc\Controller
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
     * Inicializa los módulos de la página
     */
    protected function initialize()
    {
        $this->tag->prependTitle('MTWDM | ');
        $this->view->setTemplateAfter('page');

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
}