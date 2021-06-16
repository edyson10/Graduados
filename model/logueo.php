<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$identificacion = $_POST['emailUser'];
$contrasena = $_POST['passwordUser'];
$tipo = $_POST['ingresarRol'];

$query = $conexion->query("SELECT * FROM persona WHERE identificacion = '12345' and contrasena = '12345' and rol = '1'");

if ($query) {
    $row = mysqli_fetch_array($query);
    
    $_SESSION['nombre'] = $row['nombre'];
    $ro = $_SESSION['rol'];
    die(json_encode($ro));
    
    /*
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
    $_SESSION['identificacion'] = $row['identificacion'];
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['codigo'] = $row['codigo_insitutcional'];
    $_SESSION['fecha_graduacion'] = $row['fecha_graduacion'];
    $_SESSION['carrera_graduacion'] = $row['carrera_graduacion'];
    $_SESSION['rol'] = $row['rol'];*/
    $respuesta = array('respuesta' => 'exito' , 'rol' => $row['rol']);
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
