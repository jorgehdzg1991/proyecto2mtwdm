<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 21/02/2017
 * Time: 07:20 PM
 */
class AjustesController extends SystemControllerBase
{
    public function initialize()
    {
        $this->moduleName = 'Ajustes de cuenta y horario';
        $this->tag->setTitle($this->moduleName);
        parent::initialize();
    }

    protected function defineModuleCssLinks()
    {
        $this->moduleCssLinks = [
            'plugins/form-select2/select2.css',
            'plugins/form-multiselect/css/multi-select.css'
        ];

        parent::defineModuleCssLinks();
    }

    protected function defineModuleJavaScripts()
    {
        $this->moduleJavaScripts = [
            'plugins/form-select2/select2.min.js',
            'plugins/form-multiselect/js/jquery.multi-select.min.js',
            'plugins/form-jasnyupload/fileinput.min.js',
            'js/modules/ajustes.js'
        ];

        parent::defineModuleJavaScripts();
    }

    public function indexAction()
    {
        $horario = [
            'lunes' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'martes' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'miercoles' => '11:00 AM a 2:30 PM',
            'jueves' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'viernes' => '11:00 AM a 2:30 PM - 5:00 PM a 8:30 PM',
            'sabado' => '11:00 AM a 2:30 PM',
            'domingo' => 'No labora'
        ];

        $cuenta = [
            'nombre' => 'Dr. Jorge Luis Hernández Arriaga',
            'especialidades' => 'Pediatría, Neonatología',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque aut consectetur, dicta, dolor earum eligendi exercitationem fugit hic nobis non omnis optio quam quibusdam reiciendis repudiandae sunt temporibus vel?',
            'foto' => 'img/avatar/aniss.png',
            'formacion' => [
                [
                    'titulo' => 'Médico Cirujano',
                    'universidad' => 'Universidad Autónoma de San Luis Potosí',
                    'anio' => 1981,
                    'cedula' => '123456789'
                ],
                [
                    'titulo' => 'Pediatría',
                    'universidad' => 'Universidad de Guanajuato',
                    'anio' => 1984,
                    'cedula' => '987654321'
                ],
                [
                    'titulo' => 'Neonatología',
                    'universidad' => 'Universidad de Guanajuato',
                    'anio' => 1987,
                    'cedula' => '423569871'
                ]
            ],
            'precio' => number_format(500, 2),
            'duracion' => 40
        ];

        $this->view->horario = $horario;
        $this->view->cuenta = $cuenta;
    }
}