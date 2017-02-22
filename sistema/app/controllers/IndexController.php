<?php

class IndexController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Tablero de inicio';
        $this->tag->setTitle($this->moduleName);
        parent::initialize();
    }

    public function indexAction()
    {
        $this->view->moduleName = $this->moduleName;
        $this->flash->success('¡Bienvenido al sistema!');
    }

}

