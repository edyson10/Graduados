<?php

include_once 'model/conexion.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php
                                $query = $conexion->query("SELECT count(*) FROM noticia");
                                $row = mysqli_fetch_array($query);
                                echo $row[0];
                                ?>
                            </h3>
                            <p>Noticias registradas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <a href="Noticia" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php
                                $query = $conexion->query("SELECT count(*) FROM evento");
                                $row = mysqli_fetch_array($query);
                                echo $row[0];
                                ?>
                            </h3>
                            <p>Eventos registrados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-archive"></i>
                        </div>
                        <a href="Evento" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php
                                $query = $conexion->query("SELECT count(*) FROM persona");
                                $row = mysqli_fetch_array($query);
                                echo $row[0];
                                ?>
                            </h3>
                            <p>Graduados registrados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="Ver-graduados" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php
                                $query = $conexion->query("SELECT count(*) FROM carrera");
                                $row = mysqli_fetch_array($query);
                                echo $row[0];
                                ?>
                            </h3>
                            <p>Carreras registradas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="Carrera" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->