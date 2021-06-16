<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Noticia</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Noticia</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row mb-2">
                <div class="col-sm-4">
                    <a type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-registrar-noticia">Registrar noticia</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Noticias registradas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Fecha noticia</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conexion->query("SELECT * FROM noticia ORDER BY fecha_noticia ASC");
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "<tr>
                                                <td>" . $row["id"] . "</td>
                                                <td>" . utf8_encode($row["titulo"]) . "</td>
                                                <td>" . utf8_encode($row["descripcion"]) . "</td>
                                                <td>" . utf8_encode($row["fecha_noticia"]) . "</td>
                                                <td>
                                                    <a class='btn btn-danger' onclick='verPersonal(" . $row["id"] . "," . 2 . ")'><i class='fas fa-trash'></i></a>
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

<!-- Modal registrar carrera -->
<div class="modal fade" id="modal-registrar-noticia">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar noticia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="FormRegistrarNoticia" id="FormRegistrarNoticia" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Noticia</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el titulo de la noticia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Descripci&oacute;n</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="noticia" name="noticia" placeholder="Ingrese una descripci&oacute;n de la noticia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha noticia</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="fechaNoticia" name="fechaNoticia" placeholder="Ingrese la noticia">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->