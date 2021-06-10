<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registrar graduado</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar graduado</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registro graduados</h3>
                        </div>
                        <form id="FormRegistrarGraduados" name="FormRegistrarGraduados" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nombreGraduado" name="nombreGraduado" placeholder="Ingrese el nombre del graduado.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Apellido</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="apellidoGraduado" name="apellidoGraduado" placeholder="Ingrese el apellido del graduado.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha nacimiento</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="fechaNacimientoGraduado" name="fechaNacimientoGraduado" placeholder="Ingrese el nombre de la carrera">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">identificaci&oacute;n</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="identificacionGraduado" name="identificacionGraduado" placeholder="Ingrese el documento del graduado.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">C&oacute;digo institucional</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="codigoGraduado" name="codigoGraduado" placeholder="Ingrese el c&oacute;digo institucional">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Correo</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="correoGraduado" name="correoGraduado" placeholder="Ingrese el correo personal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Contrase&ntilde;a</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="contrasenaGraduado" name="contrasenaGraduado" placeholder="Ingrese una contrase&ntilde;a temporal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Repita contrase&ntilde;a</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="repContrasenaGraduado" name="repContrasenaGraduado" placeholder="Ingrese la contrase&ntilde;a de nuevo">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha graduaci&oacute;n</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="fechaGraduado" name="fechaGraduado" placeholder="Ingrese el nombre de la carrera">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Carrera</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select rounded-0" id="carreraGraduado" name="carreraGraduado">
                                                    <?php
                                                    $query = $conexion->query("SELECT * FROM carrera ORDER BY descripcion ASC");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>