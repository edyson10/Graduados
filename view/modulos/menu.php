<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color: #aa1916 !important;">
    <!-- Brand Logo -->
    <a href="#!" class="brand-link">
        <img src="view/presentacion/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: white !important;">Graduados</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="view/presentacion/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="Perfil" class="d-block" style="color: white !important;"><?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            $rol = $_SESSION['rol'];
            if ($rol == '1') { ?>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="Administracion" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt" style="color: white !important;"></i>
                            <p style="color: white !important;">Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user" style="color: white !important;"></i>
                            <p style="color: white !important;">
                                Graduados
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Registrar-graduados" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color: white !important;"></i>
                                    <p style="color: white !important;">Registrar graduado</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Ver-graduados" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color: white !important;"></i>
                                    <p style="color: white !important;">Ver graduados</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit" style="color: white !important;"></i>
                            <p style="color: white !important;">
                                General
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Evento" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color: white !important;"></i>
                                    <p style="color: white !important;">Evento</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Noticia" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color: white !important;"></i>
                                    <p style="color: white !important;">Noticia</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Carrera" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color: white !important;"></i>
                                    <p style="color: white !important;">Carrera</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            <?php } else if ($rol == '2') { ?>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="Estudio" class="nav-link">
                            <i class="nav-icon fas fa-user" style="color: white !important;"></i>
                            <p style="color: white !important;">Estudios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Experiencia" class="nav-link">
                            <i class="nav-icon fas fa-user" style="color: white !important;"></i>
                            <p style="color: white !important;">Experiencia</p>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>