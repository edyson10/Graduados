<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$fecha = $_POST['fechaNoticia'];

if (empty($noticia)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    $sql = $conexion->query("INSERT INTO noticia (id, titulo, descripcion, fecha_noticia) VALUES (NULL, '$titulo', '$noticia', '$fecha')");
    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
