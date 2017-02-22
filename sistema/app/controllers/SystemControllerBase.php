<?php

use Phalcon\Mvc\Controller;

class SystemControllerBase extends Controller
{
    protected $moduleName;

    protected function initialize()
    {
        $this->tag->prependTitle('MTWDM | ');
        $this->view->setTemplateAfter('system');
    }
}
