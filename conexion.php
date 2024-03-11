<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "task";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

mysqli_select_db($conn, $database) or die("no se encontro la base de datos");
mysqli_set_charset($conn, "utf8");