<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 21/02/2017
 * Time: 07:20 PM
 */
class AjustesController extends SystemControllerBase
{
    public function initialize()
    {
        $this->moduleName = 'Ajustes de cuenta y horario';
        $this->tag->setTitle($this->moduleName);
        parent::initialize();
    }

    public function indexAction()
    {
        $this->view->moduleName = $this->moduleName;
    }
}