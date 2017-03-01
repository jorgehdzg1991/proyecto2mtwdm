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

        $this->moduleCssLinks = [
            'plugins/form-select2/select2.css',
            'plugins/form-multiselect/css/multi-select.css'
        ];

        $this->moduleJavaScripts = [
            'plugins/form-select2/select2.min.js',
            'plugins/form-multiselect/js/jquery.multi-select.min.js',
            'plugins/form-jasnyupload/fileinput.min.js',
            'js/modules/ajustes.js'
        ];

        parent::initialize();
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

    public function formacionacademicaAction()
    {
        $this->view->action = "Formación Académica";
        $this->view->formacion = [
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
        ];
    }

    public function formularionuevotituloAction()
    {
        $this->view->disable();

        echo '<div class="row" style="margin-top: 25px">
    <div class="col-xs-12">
        <h3>Agregar nuevo título académico</h3>
        <hr>
        <div class="form-group">
            <label for="txtTitulo">Titulo obtenido</label>
            <input type="text" id="txtTitulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtUniversidad">Universidad</label>
            <input type="text" id="txtUniversidad" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtAnio">Año</label>
            <input type="number" id="txtAnio" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtCedula">Número de cédula profesional</label>
            <input type="text" id="txtCedula" class="form-control">
        </div>
        <hr>
        <div class="btn-toolbar text-right">
            <button class="btn btn-default btn-sm" onclick="$(\'body\').toggleClass(\'show-rightbar\')"><i class="fa fa-ban"></i> Cancelar</button>
            <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Agregar</button>
        </div>
    </div>
</div>';
    }
}