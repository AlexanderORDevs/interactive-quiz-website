<?php
// CONEXIÓN A LA BD
require '../database/conexionDB.php';
session_start();

// VERIFICAR CONEXIÓN
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Enviar formulario
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['dni'], $_POST['departamento'], $_POST['edad'])) {

    $nombre = strtolower($_POST['nombre']);
    $apellido = strtolower($_POST['apellido']);
    $correo = $_POST['correo'];
    $dni = $_POST['dni'];
    $departamento = strtolower($_POST['departamento']);
    $edad = $_POST['edad'];

    $sql = "INSERT INTO participantes (nombre, apellido, dni, corre_electronico, departamento, edad, puntaje)
            VALUES ('$nombre', '$apellido', '$dni', '$correo', '$departamento', $edad, NULL)";

    if ($conexion->query($sql) === TRUE) {
        $_SESSION['last_id'] = $conexion->insert_id;
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    $cantidad = $_POST['num'];
    $queryQuestions = "SELECT * FROM preguntas ORDER BY RAND() LIMIT $cantidad;";
    $getQuestions = $conexion->query($queryQuestions);

    $questions = [];
    if ($getQuestions->num_rows > 0) {
        while ($row = $getQuestions->fetch_assoc()) {
            $questions[] = $row;
        }
    }
    echo json_encode($questions);
} elseif (isset($_POST['puntaje']) && isset($_SESSION['last_id'])) {

    $puntaje = $_POST['puntaje'];
    $last_id = $_SESSION['last_id'];

    $sql_update = "UPDATE participantes SET puntaje = $puntaje WHERE id = $last_id";
    if ($conexion->query($sql_update) === TRUE) {
        echo "Puntaje actualizado correctamente";
    } else {
        echo "Error al actualizar el puntaje: " . $conexion->error;
    }
} else {
    echo "Faltan datos en el formulario.";
}

// CERRAR CONEXIÓN
$conexion->close();
?>