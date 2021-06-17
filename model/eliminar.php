<?php

require_once 'conexion.php';

if ($_POST['eliminar'] == 'eliminarEstudio') {
    $id = $_POST['id'];
    $sql = "DELETE FROM estudio WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarExperiencia') {
    $id = $_POST['id'];
    $sql = "DELETE FROM experiencia WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarNoticia') {
    $id = $_POST['id'];
    $sql = "DELETE FROM noticia WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarEvento') {
    $id = $_POST['id'];
    $sql = "DELETE FROM evento WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
}
