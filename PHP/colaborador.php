<?php
// CONEXIÓN A LA BD
require '../database/conexionDB.php';

// VERIFICAR CONEXIÓN
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['fullname'], $_POST['dni'], $_POST['password'], $_POST['correo'])) {

    $fullname = strtolower($_POST['fullname']);
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];
    $status = 1;

    $sql = "INSERT INTO colaboradores (`full_name`, `dni`, `password`, `email`, `status`)
            VALUES ('$fullname', '$dni', '$password', '$correo', '$status')";

    if ($conexion->query($sql) === FALSE) {
        echo "Error al insertar datos: " . $conexion->error;
    } 
}


// CERRAR CONEXIÓN
$conexion->close();
?>