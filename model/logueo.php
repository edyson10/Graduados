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
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['identificacion'] = $row['identificacion'];
    $_SESSION['rol'] = $row['rol'];
    $respuesta = array('respuesta' => 'exito' , 'rol' => $_SESSION['rol']);
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
