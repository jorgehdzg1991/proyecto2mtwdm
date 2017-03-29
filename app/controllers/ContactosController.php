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
        $doctores = [
            [
                'nombre' => 'Dr. Simi',
                'especialidad' => 'Lo mismo pero más barato',
                'telefono' => '(477) 123 4567',
                'correo' => 'similar@test.com'
            ],
            [
                'nombre' => 'Dr. Otro Fulano',
                'especialidad' => 'Traumatología y ortopedia',
                'telefono' => '(477) 123 6987',
                'correo' => 'fulano.doctor@test.com'
            ],
            [
                'nombre' => 'Dr. Patch Adams',
                'especialidad' => 'Oncología',
                'telefono' => '(477) 9874563',
                'correo' => 'patch.adams@test.com'
            ]
        ];

        $this->view->doctores = $doctores;
    }

    public function nuevoAction()
    {
        $especialidades = [
            [
                'valor' => '0',
                'texto' => 'Pediatría'
            ],
            [
                'valor' => '1',
                'texto' => 'Neonatología'
            ],
            [
                'valor' => '2',
                'texto' => 'Neurología'
            ],
            [
                'valor' => '3',
                'texto' => 'Cardiología'
            ]
        ];

        $this->view->especialidades = $especialidades;
    }
}