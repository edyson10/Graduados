<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$evento = $_POST['evento'];
$lugar = $_POST['lugarEvento'];
$fecha = $_POST['fechaEvento'];

if (empty($evento)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else if (empty($lugar)) {
    $respuesta = array('respuesta' => 'vacio');
    echo json_encode($respuesta);
    return;
} else {
    $sql = $conexion->query("INSERT INTO evento (id, descripcion, fecha_evento, lugar_evento) VALUES (NULL, '$evento', '$fecha', '$lugar')");
    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);