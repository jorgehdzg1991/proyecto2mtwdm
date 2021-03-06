<header class="navbar navbar-inverse navbar-fixed-top" role="banner">

    <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
    <!--<a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>-->

    <div class="navbar-header pull-left">
        <a class="navbar-brand" href="#"></a>
    </div>

    <ul class="nav navbar-nav pull-right toolbar">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                <span class="hidden-xs">{{ auth['nombre_completo'] }} <i class="fa fa-caret-down"></i></span>
                {{ image('img/avatar/dangerfield.png', 'alt': 'Jeff Dangerfield') }}
            </a>
            <ul class="dropdown-menu userinfo arrow">
                <li class="username">
                    <a href="#">
                        <div class="pull-left">{{ image('img/avatar/dangerfield.png', 'class': 'userimg', 'alt': 'Jeff Dangerfield') }}</div>
                        <div class="pull-right"><h5>Hola {{ auth['nombre'] }}!</h5><small>Iniciaste sesión como <span>{{ auth['login'] }}</span></small></div>
                    </a>
                </li>
                <li class="userlinks">
                    <ul class="dropdown-menu">
                        <li>{{ link_to('ajustes', 'Ajustes <i class="pull-right fa fa-user"></i>') }}</li>
                        <li class="divider"></li>
                        <li>{{ link_to('login/end', 'Salir <i class="pull-right fa fa-sign-out"></i>') }}</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

</header>

<div id="page-container">

    <nav id="page-leftbar" role="navigation">
        {{ elements.getLeftMenu(moduleName) }}
    </nav>

    <div id="page-rightbar" style="overflow-y: scroll !important;">

    </div>

    <div id="page-content">
        <div id="wrap">
            <div id="page-heading">
                {{ elements.getBreadcrumb(moduleName, action) }}

                <h1>{{ moduleName }}</h1>

                <div class="options">
                    <div class="btn-toolbar">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" id="area-alertas">{{ flash.output() }}</div>
                </div>
                {{ content() }}
            </div>
        </div>
    </div>

</div>