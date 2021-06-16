<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$titulo = $_POST['tituloEvento'];
$descripcion = $_POST['descripcionEvento'];
$lugar = $_POST['lugarEvento'];
$fecha = $_POST['fechaEvento'];

if (empty($titulo)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else if (empty($descripcion)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else if (empty($lugar)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else {
    $sql = $conexion->query("INSERT INTO evento (id, titulo, descripcion, fecha_evento, lugar_evento) 
    VALUES (NULL, '$titulo', '$descripcion', '$fecha', '$lugar')");
    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);