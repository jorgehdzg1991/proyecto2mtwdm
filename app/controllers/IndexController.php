<?php

class IndexController extends SystemControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Inicio');
        parent::initialize();
    }

    public function indexAction()
    {

    }

}

