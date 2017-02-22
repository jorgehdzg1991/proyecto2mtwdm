<?php

class IndexController extends ControllerBase
{

    protected function initialize()
    {
        $this->moduleName = 'Inicio';
        $this->tag->setTitle($this->moduleName);
        parent::initialize();
    }

    public function indexAction()
    {

    }

}

