<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 24/02/2017
 * Time: 09:47 AM
 */
class ContactosController extends SystemControllerBase
{
    protected function initialize()
    {
        $this->moduleName = 'Mis contactos';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'plugins/datatables/dataTables.css',
            'plugins/form-select2/select2.css'
        ];

        $this->moduleJavaScripts = [
            'plugins/datatables/jquery.dataTables.min.js',
            'plugins/datatables/dataTables.bootstrap.js',
            'plugins/form-select2/select2.min.js',
            'js/modules/contactos.js'
        ];

        parent::initialize();
    }

    public function indexAction()
    {
        $doctores_vinculados = $this->buscarDoctoresVinculados();
        $doctores = $this->buscarTodosDoctores();

        $this->view->doctores_vinculados = $doctores_vinculados;
        $this->view->doctores = $doctores;
    }

    function vervinculadosAction() {
        $this->view->disable();
        echo json_encode($this->buscarDoctoresVinculados());
    }

    function vernovinculadosAction() {
        $this->view->disable();
        echo json_encode($this->buscarTodosDoctores());
    }

    function vincularAction($id = null) {
        if (empty($id)) {
            $this->flash->error('No se recibieron datos de vinculación con el doctor seleccionado. Intente nuevamente.');
            $this->response->redirect('contactos');
            return;
        }

        $vinculacion = new CarteraColaboradores();
        $vinculacion->setDoctoresId($this->auth['id']);
        $vinculacion->setColaboradoresId($id);

        if (!$vinculacion->save()) {
            $this->flash->error('No pudo realizarse la vinculación debido a un error. Intente nuevamente.');
        } else {
            $this->flash->success('Contacto vinculado correctamente.');
        }

        $this->response->redirect('contactos');
    }

    function desvincularAction($id = null) {
        if (empty($id)) {
            $this->flash->error('No se recibieron datos de desvinculación. Intente nuevamente.');
            $this->response->redirect('contactos');
            return;
        }

        $vinculacion = CarteraColaboradores::findFirst("colaboradores_id = $id AND estatus = 1");

        if (!$vinculacion) {
            $this->flash->error('No se pudo encontrar el contacto vinculado.');
            $this->response->redirect('contactos');
            return;
        }

        $vinculacion->setEstatus(0);

        if (!$vinculacion->save()) {
            $this->flash->error('No pudo realizarse la desvinculación debido a un error. Intente nuevamente.');
        } else {
            $this->flash->success('Contacto desvinculado correctamente.');
        }

        $this->response->redirect('contactos');
    }

    private function buscarDoctoresVinculados()
    {
        $sql = "
        SELECT
          d.id,
          p.nombre,
          p.apellido_paterno,
          p.apellido_materno,
          d.especialidad,
          p.telefono,
          p.correo
        FROM Doctores d
        INNER JOIN Personas p ON d.personas_id = p.id
        INNER JOIN CarteraColaboradores c ON d.id = c.colaboradores_id
        WHERE c.doctores_id = {$this->auth['id']} 
        AND p.estatus = 1
        AND c.estatus = 1";

        $result = $this->modelsManager->executeQuery($sql);

        $doctores_vinculados = [];

        foreach ($result as $doctor) {
            $doctores_vinculados[] = $doctor;
        }

        return $doctores_vinculados;
    }

    private function buscarTodosDoctores() {
        $sql = "
        SELECT
          d.id,
          p.nombre,
          p.apellido_paterno,
          p.apellido_materno,
          d.especialidad,
          p.telefono,
          p.correo
        FROM Doctores d
        INNER JOIN Personas p ON d.personas_id = p.id
        WHERE d.id <> {$this->auth['id']}
        AND d.id NOT IN(
          SELECT
            c.colaboradores_id
          FROM CarteraColaboradores c
          WHERE c.estatus = 1
        )
        AND p.estatus = 1";

        $result = $this->modelsManager->executeQuery($sql);

        $doctores = [];

        foreach ($result as $doctor) {
            $doctores[] = $doctor;
        }

        return $doctores;
    }
}