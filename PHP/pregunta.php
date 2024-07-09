<?php
// CONEXIÓN A LA BD
require '../database/conexionDB.php';

// VERIFICAR CONEXIÓN
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$sql = "SELECT * FROM preguntas;";
$getcolab = mysqli_query($conexion, $sql);

if ($getcolab) {
    echo '<table id="datatablesSimple">';
    echo '<tr class="header">';
    echo '<th>Pregunta</th>';
    echo '<th>Respuesta Correcta</th>';
    echo '<th>Respuestas Incorrectas</th>';
    echo '<th>Categoría</th>';
    echo '<th>Dificultad</th>';
    echo '</tr>';

    while ($row = $getcolab->fetch_array()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['pregunta']) . '</td>';
        echo '<td>' . htmlspecialchars($row['respuesta_correcta']) . '</td>';
        echo '<td>' . htmlspecialchars($row['respuestas_incorrectas']) . '</td>';
        echo '<td>' . htmlspecialchars($row['categoria']) . '</td>';
        echo '<td>' . htmlspecialchars($row['dificultad']) . '</td>'; 
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron registros.";
}

// CERRAR CONEXIÓN
$conexion->close();
?>