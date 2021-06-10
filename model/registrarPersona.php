<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$nombre = $_POST['nombreGraduado'];
$apellido = $_POST['apellidoGraduado'];
$fecha_nacimiento = $_POST['fechaNacimientoGraduado'];
$identificacion = $_POST['identificacionGraduado'];
$codigo = $_POST['codigoGraduado'];
$correo = $_POST['correoGraduado'];
$contrasena = $_POST['contrasenaGraduado'];
$repcontrasena = $_POST['repContrasenaGraduado'];
$fecha_graduacion = $_POST['fechaGraduado'];
$carrera = $_POST['carreraGraduado'];

$sql = $conexion->query("INSERT INTO persona (id, nombre, apellido, fecha_nacimiento, identificacion, codigo_institucional, correo, contrasena, 
fecha_graduacion, carrera_graduacion, rol) VALUES (NULL, '$nombre', '$apellido', '$fecha_nacimiento', '$identificacion', '$codigo', '$correo', 
'$contrasena', '$fecha_graduacion', '$carrera', '2')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
