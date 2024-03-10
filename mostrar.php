<?php
require 'conexion.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4 mb-3">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['title'] . '</h5>';
        echo '<p class="card-text">' . $row['description'] . '</p>';
        echo '<button class="btn btn-danger delete-btn" data-task-id="' . $row['id'] . '">Eliminar</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No hay tareas disponibles.</p>';
}

$conn->close();

