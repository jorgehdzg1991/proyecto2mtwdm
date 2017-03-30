<?php

class RegistroController extends PageControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Registro';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'css/no-sistema.css'
        ];

        $this->moduleJavaScripts = [];

        parent::initialize();
    }

    public function indexAction()
    {
    }

    public function registrarAction()
    {
        $this->crearNuevoDoctor($this->request->getPost());
    }

    private function crearNuevoDoctor($datos)
    {
        if ($datos['passwd'] != $datos['repasswd']) {
            $this->flash->error('Las contraseñas no coinciden. Verifíquelas e intente de nuevo.');
            $this->dispatcher->forward(['controller' => 'registro', 'action' => 'index']);
            return;
        }

        $persona = new Personas();
        $persona->setNombre($datos['nombre']);
        $persona->setApellidoPaterno($datos['apellido_paterno']);
        $persona->setApellidoMaterno($datos['apellido_materno']);
        $persona->setCorreo($datos['correo']);

        if (!$persona->save()) {
            $this->flash->error('No pudimos crear su cuenta debido a un error. Intente nuevamente.');
            $this->response->redirect('registro');
            return;
        }

        $persona->setId($this->db->lastInsertId());

        $credenciales = new Credenciales();
        $credenciales->setLogin($datos['login']);
        $credenciales->setPasswd(md5($datos['passwd']));

        if (!$credenciales->save()) {
            $persona->delete();
            $this->flash->error('No pudimos crear su cuenta debido a un error. Intente nuevamente.');
            $this->response->redirect('registro');
            return;
        }

        $credenciales->setId($this->db->lastInsertId());

        $configuracion = new Configuraciones();

        if (!$configuracion->save()) {
            $persona->delete();
            $credenciales->delete();
            $this->flash->error('No pudimos crear su cuenta debido a un error. Intente nuevamente.');
            $this->response->redirect('registro');
            return;
        }

        $configuracion->setId($this->db->lastInsertId());

        $doctor = new Doctores();
        $doctor->setPersonasId($persona->getId());
        $doctor->setEspecialidad($datos['especialidad']);
        $doctor->setConfiguracionesId($configuracion->getId());
        $doctor->setCredencialesId($credenciales->getId());

        if (!$doctor->save()) {
            $persona->delete();
            $credenciales->delete();
            $this->flash->error('No pudimos crear su cuenta debido a un error. Intente nuevamente.');
            $this->response->redirect('registro');
            return;
        }

        $controladorLogin = new LoginController();
        $controladorLogin->iniciarSesion($credenciales->getLogin(), $credenciales->getPasswd());
    }
}