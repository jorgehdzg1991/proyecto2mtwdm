<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected $moduleName;

    protected function initialize()
    {
        $this->tag->prependTitle('PlannerDoc | ');
        $this->view->setTemplateAfter('plantilla');
    }
}
