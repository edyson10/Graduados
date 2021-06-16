<?php

require_once 'conexion.php';

$carrera = $_POST['carreraEstudio'];
$anio_graduacion = $_POST['anioGraduacionEstudio'];
//$persona = $_POST['persona'];
$persona = '109044';

if (empty($carrera)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else {
    $sql = $conexion->query("INSERT INTO estudio (id, carrera, ano_graduacion, persona) VALUES (NULL, '$carrera', '$anio_graduacion', '$persona')");
    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);