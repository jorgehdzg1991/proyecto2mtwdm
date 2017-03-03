<?php

class LoginController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Login Doctor';
        $this->tag->setTitle($this->moduleName);

        parent::initialize();
    }


    public function indexAction()
    {

    }
}

