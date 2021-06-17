<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$identificacion = $_POST['emailUser'];
$contrasena = $_POST['passwordUser'];
$tipo = $_POST['ingresarRol'];

$query = $conexion->query("SELECT * FROM persona WHERE identificacion = '$identificacion' and contrasena = '$contrasena' and rol = '$tipo'");

if ($query) {
    $row = mysqli_fetch_array($query);
    session_start();
    //die(json_encode($ro));
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['identificacion'] = $row['identificacion'];
    //$_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
    //$_SESSION['correo'] = $row['correo'];
    //$_SESSION['codigo'] = $row['codigo_insitutcional'];
    //$_SESSION['fecha_graduacion'] = $row['fecha_graduacion'];
    //$_SESSION['carrera_graduacion'] = $row['carrera_graduacion'];
    $_SESSION['rol'] = $row['rol'];
    $respuesta = array('respuesta' => 'exito' , 'rol' => $_SESSION['rol']);
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
