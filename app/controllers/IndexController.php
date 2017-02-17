<?php

class IndexController extends SystemControllerBase
{
    public function initialize()
    {
        $this->moduleName = 'Inicio';
        $this->tag->setTitle($this->moduleName);
        parent::initialize();
    }

    public function indexAction()
    {
        $this->view->moduleName = $this->moduleName;
        $this->flash->success('¡Bienvenido al sistema!');
    }

}

