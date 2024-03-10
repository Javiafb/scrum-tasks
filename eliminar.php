
<?php
require 'conexion.php';

$task_id = $_POST['task_id'];

$sql = "DELETE FROM tasks WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $task_id);

if ($stmt->execute() === TRUE) {
    echo 'success';
} else {
    echo 'error';
}
?>
