<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#!" class="brand-link">
        <img src="view/presentacion/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Graduados</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="view/presentacion/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="Perfil" class="d-block"><?php echo $_SESSION['nombre']; ?>&nbsp;<?php echo $_SESSION['apellido'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="Administracion" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Graduados
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="Registrar-graduados" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar graduado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Ver-graduados" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ver graduados</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            General
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="Evento" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Evento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Noticia" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Noticia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Carrera" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Carrera</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>