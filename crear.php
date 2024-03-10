<?php

require 'conexion.php';

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
if ($conn->query($sql) === TRUE) {
    echo '<div class="col-md-4 mb-3">';
    echo '<div class="card">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $title . '</h5>';
    echo '<p class="card-text">' . $description . '</p>';
    echo '<button class="btn btn-danger delete-btn" data-task-id="' . $conn->insert_id . '">Eliminar</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
} else {
    echo 'Error al crear la tarea: ' . $conn->error;
}

$conn->close();
