<?php

/**
 * Controlador del módulo de pacientes
 */
class PacientesController extends SystemControllerBase
{
    /**
     * Inicializa el módulo
     */
    protected function initialize()
    {
        $this->moduleName = 'Mis pacientes';
        $this->tag->setTitle($this->moduleName);

        $this->moduleCssLinks = [
            'plugins/datatables/dataTables.css',
            'plugins/form-select2/select2.css'
        ];

        $this->moduleJavaScripts = [
            'plugins/datatables/jquery.dataTables.min.js',
            'plugins/datatables/dataTables.bootstrap.js',
            'plugins/form-select2/select2.min.js',
            'plugins/form-ckeditor/ckeditor.js',
            'js/modules/pacientes.js'
        ];

        parent::initialize();
    }

    /**
     * Acción que muestra la tabla de filtrado de pacientes con links a las diferentes acciones del módulo
     */
    public function indexAction()
    {
        $sql = "
        SELECT
          pac.id,
          per.nombre,
          per.apellido_paterno,
          per.apellido_materno,
          per.telefono
        FROM Personas per
        INNER JOIN Pacientes pac ON per.id = pac.personas_id
        INNER JOIN CarteraPacientes cpa ON cpa.pacientes_id = pac.id
        WHERE cpa.doctores_id = {$this->auth['id']}
        AND per.estatus = 1";

        $pacientes = [];

        foreach ($this->modelsManager->executeQuery($sql) as $paciente) {
            $pacientes[] = $paciente;
        }

        $this->view->pacientes = $pacientes;
    }

    /**
     * Acción que muestra el formulario de creación de un nuevo paciente
     */
    public function nuevoAction()
    {
        $this->view->action = 'Nuevo paciente';

        $sexo = [
            'H' => 'Masculino',
            'F' => 'Femenino'
        ];

        $this->view->sexo = $sexo;
    }

    /**
     * Acción que guarda el paciente nuevo en la base de datos
     */
    public function guardarAction()
    {
        $nuevoPaciente = $this->crearPaciente($this->request->getPost());

        if ($nuevoPaciente != false) {
            $this->flash->success('Paciente creado correctamente');
            $this->response->redirect('pacientes/index');
        } else {
            $this->flash->error('No se pudo crear el registro de paciente');
            $this->dispatcher->forward(['controller' => 'pacientes', 'action' => 'nuevo']);
        }
    }

    /**
     * Acción que obtiene los datos de un paciente por ID y devuelve un JSON con sus datos
     * @param int $id ID del paciente
     */
    public function verAction($id = null)
    {
        $this->view->disable();

        if (empty($id)) {
            echo json_encode([
                'success' => false,
                'message' => 'No se recibió un id'
            ]);
        }

        $paciente = $this->buscarPaciente($id);

        if (!$paciente) {
            echo json_encode([
                'success' => false,
                'message' => 'No se encontró el paciente con el id = ' . $id
            ]);
        } else {
            echo json_encode([
                'success' => true,
                'message' => 'Paciente encontrado',
                'data' => $paciente
            ]);
        }
    }

    /**
     * Acción que muestra el formulario de edición del paciente
     * @param int $id Id del paciente
     */
    public function editarAction($id = null)
    {
        if (empty($id)) {
            $this->response->redirect('pacientes');
            return;
        }

        $this->view->action = 'Editar paciente';

        $sexo = [
            'H' => 'Masculino',
            'F' => 'Femenino'
        ];

        $this->view->sexo = $sexo;

        $paciente = $this->buscarPaciente($id);

        if (!$paciente) {
            $this->flash->error('No se encontró el paciente que deseaba editar');
            $this->response->redirect('pacientes/index');
        } else {
            $this->view->paciente = $paciente;
        }
    }

    /**
     * Acción que guarda la edición del paciente en la base de datos
     */
    public function guardareditarAction()
    {
        $datos = $this->request->getPost();
        $paciente = $this->editarPaciente($datos);

        if ($paciente == false) {
            $this->flash->error('No pudo guardarse el registro de paciente debido a un error');
            $this->dispatcher->forward(['controller' => 'pacientes', 'action' => 'editar']);
        } else {
            $this->flash->success('Paciente editado correctamente');
            $this->response->redirect("pacientes/editar/{$datos['id']}");
        }
    }

    /**
     * Acción que muestra el editor de la historia clínica del paciente
     * @param int $id Id del paciente
     */
    public function historiaAction($id = null)
    {
        if (empty($id)) {
            $this->response->redirect('pacientes');
            return;
        }

        $paciente = Pacientes::findFirst("id = $id");

        if (!$paciente) {
            $this->flash->error('No se encontró la historia clínica');
            $this->response->redirect('pacientes');
            return;
        }

        $persona = Personas::findFirst("id = {$paciente->getPersonasId()}");

        $this->view->action = 'Historia clínica de paciente';
        $this->view->paciente = $paciente->toArray();
        $this->view->nombre_completo = "{$persona->getNombre()} {$persona->getApellidoPaterno()} {$persona->getApellidoMaterno()}";
    }

    /**
     * Acción que guarda la edición de la historia clínica de un paciente
     */
    public function guardarhistoriaAction()
    {
        $datos = $this->request->getPost();

        $paciente = Pacientes::findFirst("id = {$datos['id']}");

        if (!$paciente) {
            $this->flash->error('No se encontró el paciente de quien se pretendía modificar su historia clínica');
            $this->response->redirect("pacientes");
            return;
        }

        $paciente->setHistoriaClinica($datos['historia_clinica']);

        if (!$paciente->save()) {
            $this->flash->error('No se pudo modificar la historia clínica');
            $this->response->redirect("pacientes");
        } else {
            $this->flash->success('Historia clínica guardada');
            $this->response->redirect("pacientes");
        }
    }

    /**
     * Acción que elimina un paciente de la base de datos
     * @param int $id Id del paciente a eliminar
     */
    public function eliminarAction($id = null) {
        if (empty($id)) {
            $this->response->redirect('pacientes');
            return;
        }

        $paciente = Pacientes::findFirst("id = $id");

        if (!$paciente) {
            $this->flash->error('No se encontró el paciente que se pretendía eliminar');
            $this->response->redirect("pacientes");
            return;
        }

        $persona = Personas::findFirst("id = {$paciente->getPersonasId()}");

        $persona->setEstatus(false);

        if (!$persona->save()) {
            $this->flash->error('No se pudo eliminar el paciente seleccionado');
            $this->response->redirect("pacientes");
        } else {
            $this->flash->success('Paciente eliminado correctamente');
            $this->response->redirect("pacientes");
        }
    }

    /**
     * Función privada que contiene la lógica para guardar un paciente en la base de datos
     * @param $datos array Datos del nuevo paciente
     * @return array|bool Devuelve los datos insertados si es correcto; False si hay error
     */
    private function crearPaciente($datos)
    {
        $persona = new Personas();
        $persona->setNombre($datos['nombre']);
        $persona->setApellidoPaterno($datos['apellido_paterno']);
        $persona->setApellidoMaterno($datos['apellido_materno']);
        $persona->setCorreo($datos['correo']);
        $persona->setTelefono($datos['telefono']);

        if (!$persona->save()) {
            $this->flash->error('No pudo guardarse el registro de paciente debido a un error. Intente nuevamente.');
            $this->response->redirect('pacientes/nuevo');
        }

        $fecha_nacimiento = new DateTime(str_replace('/', '-', $datos['fecha_nacimiento']));

        $paciente = new Pacientes();
        $paciente->setPersonasId($this->db->lastInsertId());
        $paciente->setSexo($datos['sexo']);
        $paciente->setFechaNacimiento($fecha_nacimiento->format('Y-m-d'));
        $paciente->setPeso($datos['peso']);
        $paciente->setEstatura($datos['estatura']);
        $paciente->setNacionalidad($datos['nacionalidad']);

        if ($paciente->save()) {
            $paciente->setId($this->db->lastInsertId());

            $cartera_pacientes = new CarteraPacientes();
            $cartera_pacientes->setDoctoresId($this->auth['id']);
            $cartera_pacientes->setPacientesId($paciente->getId());
            $cartera_pacientes->save();

            $datos['id'] = $paciente->getId();
            $datos['personas_id'] = $paciente->getPersonasId();

            return $datos;
        } else {
            return false;
        }
    }

    /**
     * Función privada que busca los datos de un paciente por Id
     * @param $id int Id del paciente
     * @return array|bool Devuelve los datos si es correcto; devuelve false si hay error
     */
    private function buscarPaciente($id) {
        $sql = "
        SELECT
          pac.id,
          pac.personas_id,
          per.nombre,
          per.apellido_paterno,
          per.apellido_materno,
          per.telefono,
          per.correo,
          per.fecha_registro,
          pac.sexo,
          pac.fecha_nacimiento,
          pac.peso,
          pac.estatura,
          pac.nacionalidad
        FROM Pacientes pac
        INNER JOIN Personas per ON pac.personas_id = per.id
        WHERE pac.id = $id
        AND per.estatus = 1";

        $result = $this->modelsManager->executeQuery($sql);

        return !isset($result[0]) ? false : $result[0];
    }

    /**
     * Función privada para actualizar los datos de un paciente
     * @param $datos array Datos del paciente a editar
     * @return array|bool Devuelve los datos editados si es correcto; Devuelve false si hay error
     */
    private function editarPaciente($datos)
    {
        $persona = Personas::findFirst("id = {$datos['personas_id']}");
        $paciente = Pacientes::findFirst("id = {$datos['id']}");

        if (empty($persona) || empty($persona)) {
            $this->flash->error('No se encontró el paciente que se pretendía editar.');
            $this->response->redirect('pacientes/index');
        }

        $persona->setNombre($datos['nombre']);
        $persona->setApellidoPaterno($datos['apellido_paterno']);
        $persona->setApellidoMaterno($datos['apellido_materno']);
        $persona->setCorreo($datos['correo']);
        $persona->setTelefono($datos['telefono']);

        if (!$persona->save()) {
            $this->flash->error('No pudo actualizarse el registro de paciente debido a un error. Intente nuevamente.');
            $this->response->redirect('pacientes/editar');
        }

        $fecha_nacimiento = new DateTime(str_replace('/', '-', $datos['fecha_nacimiento']));

        $paciente->setSexo($datos['sexo']);
        $paciente->setFechaNacimiento($fecha_nacimiento->format('Y-m-d'));
        $paciente->setPeso($datos['peso']);
        $paciente->setEstatura($datos['estatura']);
        $paciente->setNacionalidad($datos['nacionalidad']);

        return $paciente->save() ? $datos : false;
    }
}