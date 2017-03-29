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

    public function startAction()
    {
        $login = $this->request->getPost('login');
        $passwd = md5($this->request->getPost('passwd'));

        $sql = "
        SELECT
          d.id,
          d.personas_id,
          p.nombre,
          p.apellido_paterno,
          p.apellido_materno,
          CONCAT(p.nombre, ' ', p.apellido_paterno, ' ', p.apellido_materno) AS nombre_completo,
          c.login,
          d.configuraciones_id
        FROM Doctores d
        INNER JOIN Personas p ON d.personas_id = p.id
        INNER JOIN Credenciales c ON d.credenciales_id = c.id
        WHERE c.login = '$login'
        AND c.passwd = '$passwd'
        AND p.estatus = 1
        LIMIT 1";

        $result = $this->modelsManager->executeQuery($sql);

        if (!$result) {
            $this->flash->error('Error de usuario o password');
            $this->dispatcher->forward([
                'controller' => 'login',
                'action' => 'index'
            ]);

            return;
        }

        $doctor = (array) $result[0];

        $this->setSessionAuth($doctor);

        $this->flash->success('Bienvenido al sistema');

        $this->dispatcher->forward([
            'controller' => 'index',
            'action' => 'index'
        ]);
    }

    public function endAction()
    {
        $this->unsetSessionAuth();

        $this->flash->success('¡Hasta pronto!');

        $this->dispatcher->forward([
            'controller' => 'login',
            'action' => 'index'
        ]);
    }

    private function setSessionAuth($auth)
    {
        $this->session->set('auth', $auth);
    }

    private function unsetSessionAuth()
    {
        if ($this->session->has('auth')) {
            $this->session->remove('auth');
        }
    }
}

