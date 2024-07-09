<?php
// CONEXIÓN A LA BD
require '../database/conexionDB.php';

// VERIFICAR CONEXIÓN
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$sql = "SELECT * FROM participantes;";
$getcolab = mysqli_query($conexion, $sql);

if ($getcolab) {
    echo '<table id="datatablesSimple">';
    echo '<tr class="header">';
    echo '<th>Nombres</th>';
    echo '<th>Apellidos</th>';
    echo '<th>DNI</th>';
    echo '<th>Correo Electrónico</th>';
    echo '<th>Departamento</th>';
    echo '<th>Edad</th>';
    echo '<th>Puntaje</th>';
    echo '</tr>';

    while ($row = $getcolab->fetch_array()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($row['apellido']) . '</td>';
        echo '<td>' . htmlspecialchars($row['dni']) . '</td>';
        echo '<td>' . htmlspecialchars($row['corre_electronico']) . '</td>';
        echo '<td>' . htmlspecialchars($row['departamento']) . '</td>'; 
        echo '<td>' . htmlspecialchars($row['edad']) . '</td>'; 
        echo '<td>' . htmlspecialchars($row['puntaje']) . '</td>'; 
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron registros.";
}

// CERRAR CONEXIÓN
$conexion->close();
?>