<?php

/**
 * Controlador del módulo de Login
 */
class LoginController extends PageControllerBase
{
    /**
     * Inicializa el módulo
     */
    protected function initialize()
    {
        $this->moduleCssLinks = [
            'css/no-sistema.css'
        ];
        $this->moduleJavaScripts = [];

        $this->tag->setTitle('MTWDM | Login');

        parent::initialize();
    }

    /**
     * Acción de inicio. Muestra el formulario de inicio de sesión
     */
    public function indexAction()
    {
    }

    /**
     * Acción de inicio de sesión. Verifica el usuario y contraseña de quien intenta iniciar sesión
     */
    public function startAction()
    {
        $login = $this->request->getPost('login');
        $passwd = md5($this->request->getPost('passwd'));

        $this->iniciarSesion($login, $passwd);
    }

    /**
     * Termina la sesión en el servidor
     */
    public function endAction()
    {
        $this->unsetSessionAuth();

        $this->flash->success('¡Hasta pronto!');

        $this->response->redirect('login/index');
    }

    public function iniciarSesion($login, $passwd)
    {
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

        if (!isset($result[0])) {
            $this->flash->error('Error de usuario o password');
            $this->dispatcher->forward(['controller' => 'login', 'action' => 'index']);

            return;
        }

        $doctor = (array) $result[0];

        $this->setSessionAuth($doctor);

        $this->flash->success('Bienvenido al sistema');

        $this->response->redirect('index');
    }

    /**
     * Crea la variable de sesión 'auth' con los datos del usuario que inició en el sistema
     * @param $auth array Datos de sesión del usuario
     */
    private function setSessionAuth($auth)
    {
        $this->session->set('auth', $auth);
    }

    /**
     * Destruye la variable 'auth' de la sesión
     */
    private function unsetSessionAuth()
    {
        if ($this->session->has('auth')) {
            $this->session->remove('auth');
        }
    }
}

