<?php

class LoginController extends Phalcon\Mvc\Controller
{
    private $moduleCssLinks;
    private $moduleJavaScripts;

    protected function initialize()
    {
        $this->view->moduleCssLinks = [];
        $this->view->moduleJavaScripts = [];

        $this->tag->setTitle('Login');
    }

    public function indexAction()
    {

    }
}

