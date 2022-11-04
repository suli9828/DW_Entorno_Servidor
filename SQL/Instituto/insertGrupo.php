<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO grupo (id_grupo, nombre, curso) VALUES (8, 'Desarrollo de Aplicaciones Web', '2º')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>