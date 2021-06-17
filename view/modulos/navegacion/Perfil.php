<?php 

$identificacion = $_SESSION['identificacion'];
$query = $conexion->query("SELECT p.nombre, p.apellido, p.fecha_nacimiento, p.identificacion, p.codigo_institucional, p.correo, p.fecha_graduacion, 
c.descripcion AS carrera, r.descripcion AS rol, p.ubicacion FROM persona p INNER JOIN carrera c ON c.id = p.carrera_graduacion INNER JOIN rol r ON r.id = p.rol 
WHERE identificacion = '$identificacion'");
if ($query) {
    $row = mysqli_fetch_array($query);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $fecha_nacimiento = $row['fecha_nacimiento'];
    $identificacion = $row['identificacion'];
    $codigo = $row['codigo_institucional'];
    $correo = $row['correo'];
    $fecha_graduacion = $row['fecha_graduacion'];
    $carrera_graduacion = $row['carrera'];
    $ubicacion = $row['ubicacion'];
    $rol = $row['rol'];
}
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Perfil</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Perfil</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <?php
                                $imagen = "view/presentacion/admin/dist/img/user2-160x160.jpg";
                                ?>
                                <img class="profile-user-img img-fluid img-circle" src="<?php echo $imagen ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $nombre; echo " "; echo $apellido; ?></h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>identificaci&oacute;n</b> <a class="float-right"><?php echo $identificacion; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Carrera</b> <a class="float-right"><?php echo utf8_encode($carrera_graduacion); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-8">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Fecha nacimiento</b> <a class="float-right"><?php echo $fecha_nacimiento; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>C&oacute;digo</b> <a class="float-right"><?php echo $codigo; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Correo</b> <a class="float-right"><?php echo $correo; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Ubicaci&oacute;n</b> <a class="float-right"><?php echo utf8_encode($ubicacion); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Rol</b> <a class="float-right"><?php echo utf8_encode($rol); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>