<div id="wrapper" class="toggled">
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <div class="sidebar-brand">
                <img id="nav_home" class="logo_menu img-fluid" src="<?php echo URL . URLIMG.NOMBRE_LOGO_?>" alt="">
            </div>
            <li>
                <a id="nav_home2" href="#">
                    <i class="fas fa-home"></i>&nbsp;Inicio
                </a>
            </li>
            <li>
                <a id="nav_perfil" href="#">
                    <i class="fas fa-id-card"></i>&nbsp;Mi Perfil
                </a>
            </li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-user-clock"></i>&nbsp;Asistencia
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li>
                        <a id="nav_asistencia_profesores" href="#">
                            <i class="fas fa-sort-up"></i>&nbsp;Asistencia Profesores
                        </a>
                    </li>
                    <li>
                        <a id="nav_reporte_profesores" href="#">
                            <i class="fas fa-sort-up"></i>&nbsp;Reporte Asistencia Profesores
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>