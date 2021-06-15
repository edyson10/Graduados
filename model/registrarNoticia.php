<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$noticia = $_POST['noticia'];
$fecha = $_POST['fechaNoticia'];

//INSERT INTO `noticia` (`id`, `titulo`, `descripcion`, `fecha_noticia`) VALUES (NULL, 'Evento de las TIC´s', 'Se realizara un evento de la tic en el biblioteca Cote Lamus', '2021-06-14');

if (empty($noticia)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    $sql = $conexion->query("INSERT INTO noticia (id, descripcion, fecha_noticia) VALUES (NULL, '$noticia', '$fecha')");
    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
