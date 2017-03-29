<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 24/02/2017
 * Time: 09:49 AM
 */
class PacientesController extends SystemControllerBase
{
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
            'js/modules/pacientes.js'
        ];

        parent::initialize();
    }

    public function indexAction()
    {
        $pacientes = [
            [
                'nombre' => 'Jorge',
                'apellidoPaterno' => 'Hernández',
                'apellidoMaterno' => 'García',
                'sexo' => 'H',
                'edad' => '25',
                'peso' => '73 Kg',
                'estatura' => '1.71 m',
                'nacionalidad' => 'Mexicana',
                'telefono' => '(477) 987 6543',
                'correo' => 'jorge@test.com'
            ],
            [
                'nombre' => 'Fulanita de Tal',
                'apellidoPaterno' => 'Corrientín',
                'apellidoMaterno' => 'López',
                'sexo' => 'M',
                'edad' => '21',
                'peso' => '54 Kg',
                'estatura' => '1.62 m',
                'nacionalidad' => 'Mexicana',
                'telefono' => '(477) 123 4567',
                'correo' => 'fulanita@test.com'
            ],
            [
                'nombre' => 'Juan',
                'apellidoPaterno' => 'Cuerdas',
                'apellidoMaterno' => 'Cuerdas',
                'sexo' => 'H',
                'edad' => '28',
                'peso' => '80 Kg',
                'estatura' => '1.55 m',
                'nacionalidad' => 'Mexicana',
                'telefono' => '(477) 159 7536',
                'correo' => 'juan.cuerdas@test.com'
            ]
        ];

        $this->view->pacientes = $pacientes;
    }

    public function nuevoAction()
    {
        $this->view->action = 'Nuevo paciente';

        $sexo = [
            'H' => 'Masculino',
            'F' => 'Femenino'
        ];

        $this->view->sexo = $sexo;
    }
}