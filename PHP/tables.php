<?php
// CONEXIÓN A LA BD
require '../database/conexionDB.php';

// VERIFICAR CONEXIÓN
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$sql = "SELECT * FROM colaboradores WHERE colaboradores.status = 1;";
$getcolab = mysqli_query($conexion, $sql);

if ($getcolab) {
    echo '<table id="datatablesSimple">';
    echo '<tr class="header">';
    echo '<th>Nombres Completos</th>';
    echo '<th>DNI</th>';
    echo '<th>Correo Electrónico</th>';
    echo '<th>Contraseña</th>';
    echo '<th>Eliminar</th>';
    echo '</tr>';

    while ($row = $getcolab->fetch_array()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['full_name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['dni']) . '</td>';
        echo '<td>' . htmlspecialchars($row['email']) . '</td>';
        echo '<td>' . htmlspecialchars($row['password']) . '</td>';
        echo '<td><a href="#" onclick="desactivarUsuario(\'' . htmlspecialchars($row['dni']) . '\')"><img src="https://cdn-icons-png.flaticon.com/512/323/323811.png" alt="Eliminar" width="40" height="40"></a></td>'; 
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron registros.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $conexion->real_escape_string($_POST['dni']);

    // Actualizar el estado del usuario
    $sql = "UPDATE colaboradores SET status = 0 WHERE dni = '$dni'";
    if ($conexion->query($sql) === FALSE) {
        echo "Error al desactivar el usuario: " . $conexion->error;
    }
}

// CERRAR CONEXIÓN
$conexion->close();
?>