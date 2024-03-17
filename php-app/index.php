<?php

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
} else {
  echo "Conexión a la base de datos exitosa.";
  mysqli_close($conn);
}

?>