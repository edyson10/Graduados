<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PRODUCCION */
    $conexion = mysqli_connect("localhost","root","","graduados");
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}