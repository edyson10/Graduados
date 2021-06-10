<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$identificacion = $_POST['emailUser'];
$contrasena = $_POST['passwordUser'];
$tipo = $_POST['ingresarRol'];

//$sql = "SELECT * FROM persona WHERE identificacion = '$identificacion' and contrasena = '$contrasena' and rol = '$tipo'";
$sql = "SELECT * FROM persona WHERE identificacion = '12345' and contrasena = '12345' and rol = '1'";
$ejecutar = mysqli_query($conexion, $sql);
$rowcount = mysqli_num_rows($ejecutar);
if ($rowcount > 0) {
    $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
    $_SESSION['identificacion'] = $row['identificacion'];
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['codigo'] = $row['codigo_insitutcional'];
    $_SESSION['fecha_graduacion'] = $row['fecha_graduacion'];
    $_SESSION['carrera_graduacion'] = $row['carrera_graduacion'];
    $_SESSION['rol'] = $row['rol'];
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
