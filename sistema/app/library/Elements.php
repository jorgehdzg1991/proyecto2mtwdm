<?php

use Phalcon\Mvc\User\Component;

class Elements extends Component
{
    private $_leftmenu = [
        'Tablero de inicio' => [
            'action' => 'index',
            'icon' => 'fa fa-home'
        ],
        'Ajustes de cuenta y horario' => [
            'action' => 'ajustes',
            'icon' => 'fa fa-cog'
        ],
        'Mi agenda' => [
            'action' => 'agenda',
            'icon' => 'fa fa-calendar'
        ],
        'Mis contactos' => [
            'action' => 'contactos',
            'icon' => 'fa fa-group'
        ],
        'Mis pacientes' => [
            'action' => 'pacientes',
            'icon' => 'fa fa-book'
        ]
    ];

    public function getLeftMenu($moduleName)
    {
        $html = '<ul class="acc-menu" id="sidebar">';

        $html .= '
        <li id="search">
            <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
            <form>
                <input type="text" class="search-query" placeholder="Buscar...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </li>
        <li class="divider"></li>';

        foreach ($this->_leftmenu as $key => $properties) {
            $action = $properties['action'];
            $icon = $properties['icon'];
            $active = $key == $moduleName ? ' class="active"' : '';

            $html .= '<li' . $active . '><a href="' . $action . '"><i class="' . $icon . '"></i> <span>' . $key . '</span></a></li>';
        }

        $html .= '</ul>';

        echo $html;
    }

    public function getBreadcrumb($moduleName, $action = null)
    {
        $module = $this->_leftmenu[$moduleName];

        $items = '';

        if ($moduleName == 'Tablero de inicio') {
            $items .= '<li class="active">Tablero de inicio</li>';
        } else {
            $items .= '<li><a href="index">Inicio</a></li>';

            if (is_null($action)) {
                $items .= '<li class="active">' . $moduleName . '</li>';
            } else {
                $items .= '<li><a href="' . $module['action'] . '">' . $moduleName . '</a></li>';
                $items .= '<li class="active">' . $action . '</li>';
            }
        }

        echo '<ol class="breadcrumb">' . $items . '</ol>';
    }
}