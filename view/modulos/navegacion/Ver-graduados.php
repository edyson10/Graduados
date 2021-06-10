<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ver graduados</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Ver graduados</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Graduados registrados</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nombre completo</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Identificaci&oacute;n</th>
                                        <th>C&oacute;digo</th>
                                        <th>Correo</th>
                                        <th>Fecha graduaci&oacute;n</th>
                                        <th>Carrera</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conexion->query("SELECT p.id, p.nombre, p.apellido, p.fecha_nacimiento, p.identificacion, p.codigo_institucional, 
                                    p.correo, p.fecha_graduacion, c.descripcion AS carrera FROM persona p INNER JOIN carrera c ON p.carrera_graduacion = c.id 
                                    ORDER BY p.identificacion ASC");
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "<tr>
                                                <td>" . utf8_encode($row["nombre"] . " " . $row["apellido"]) . "</td>
                                                <td>" . $row["fecha_nacimiento"] . "</td>
                                                <td>" . $row["identificacion"] . "</td>
                                                <td>" . utf8_encode($row["codigo_institucional"]) . "</td>
                                                <td>" . utf8_encode($row["correo"]) . "</td>
                                                <td>" . $row["fecha_graduacion"] . "</td>
                                                <td>" . utf8_encode($row["carrera"]) . "</td>
                                                <td>
                                                    <a class='btn btn-info' onclick='verPersonal(" . $row["identificacion"] . "," . 2 . ")'><i class='fas fa-eye'></i></a>
                                                </td>
                                            </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>