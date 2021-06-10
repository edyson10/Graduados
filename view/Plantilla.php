<?php

if (isset($_GET["ubicacion"])) {
    if ($_GET["ubicacion"] == "Login" || $_GET["ubicacion"] == "Registrar" || $_GET["ubicacion"] == "Recuperar-contraseña") { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Graduados | UFPS</title>
            <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="view/presentacion/login/css/login.css">
            <!-- Favicon -->
            <link href="https://ww2.ufps.edu.co/assets/img/ico/favicon.ico" rel="Shortcut icon">
            <!-- Swwetalert2 -->
            <link rel="stylesheet" href="view/presentacion/general/css/sweetalert2.min.css">
        </head>

        <body>
            <?php include "modulos/navegacion/" . $_GET["ubicacion"] . ".php"; ?>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="view/presentacion/general/js/registro.js"></script>
            <script src="view/presentacion/general/js/login.js"></script>
            <script src="view/presentacion/general/js/alertas.js"></script>
            <script src="view/presentacion/general/js/sweetalert2.min.js"></script>
            <script src="view/presentacion/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
        </body>

        </html>
    <?php } else if (
        $_GET["ubicacion"] == "Administracion" || $_GET["ubicacion"] == "Registrar-graduados"
        || $_GET["ubicacion"] == "Ver-graduados" || $_GET["ubicacion"] == "Noticia" || $_GET["ubicacion"] == "Evento"
        || $_GET["ubicacion"] == "Carrera" || $_GET["ubicacion"] == "Perfil") { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Administracion</title>
            <!-- Favicon -->
            <link href="https://ww2.ufps.edu.co/assets/img/ico/favicon.ico" rel="Shortcut icon">
            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/jqvmap/jqvmap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="view/presentacion/admin/dist/css/adminlte.min.css">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/daterangepicker/daterangepicker.css">
            <!-- summernote -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/summernote/summernote-bs4.min.css">
            <!-- Swwetalert2 -->
            <link rel="stylesheet" href="view/presentacion/general/css/sweetalert2.min.css">
            <!-- DataTables -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="view/presentacion/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="view/presentacion/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        </head>

        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                <!-- Content Wrapper. Contains page content -->
                <?php
                include_once "model/conexion.php";
                include_once "modulos/header.php";
                include_once 'modulos/menu.php';
                include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
                include_once "modulos/footer.php";
                if (empty($_SESSION['rol'])) {
                    header("Location: Login");
                }
                ?>
            </div>
            <!-- ./wrapper -->
            <!-- jQuery -->
            <script src="view/presentacion/admin/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="view/presentacion/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="view/presentacion/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="view/presentacion/admin/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="view/presentacion/admin/plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="view/presentacion/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="view/presentacion/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="view/presentacion/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="view/presentacion/admin/plugins/moment/moment.min.js"></script>
            <script src="view/presentacion/admin/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="view/presentacion/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="view/presentacion/admin/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="view/presentacion/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="view/presentacion/admin/dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="view/presentacion/admin/dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="view/presentacion/admin/dist/js/pages/dashboard.js"></script>
            <!-- DataTables  & Plugins -->
            <script src="view/presentacion/admin/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
            <script src="view/presentacion/admin/plugins/jszip/jszip.min.js"></script>
            <script src="view/presentacion/admin/plugins/pdfmake/pdfmake.min.js"></script>
            <script src="view/presentacion/admin/plugins/pdfmake/vfs_fonts.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

            <script src="view/presentacion/general/js/registro.js"></script>
            <script src="view/presentacion/general/js/alertas.js"></script>
            <script src="view/presentacion/general/js/sweetalert2.min.js"></script>

            <script src="view/presentacion/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
        </body>

        </html>

<?php }
} else {
    header('location: Login');
}
