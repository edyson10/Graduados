<?php

require_once 'conexion.php';

session_start();
$cargo = $_POST['cargoExperiencia'];
$empresa = $_POST['empresaExperiencia'];
$fecha_inicio = $_POST['fechaInicioExperiencia'];
$fecha_fin = $_POST['fechaFinExperiencia'];
$persona = $_SESSION['identificacion'];
//$persona = '12345';

if (empty($cargo)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else if (empty($empresa)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else {
    $sql = $conexion->query("INSERT INTO experiencia (id, descripcion, empresa, fecha_inicio, fecha_fin, persona) 
    VALUES (NULL, '$cargo', '$empresa', '$fecha_inicio', '$fecha_fin', '$persona')");
    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);

//;