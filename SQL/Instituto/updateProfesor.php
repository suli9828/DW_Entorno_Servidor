<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "UPDATE profesor SET apellidos='Valverde' WHERE apellidos='Gijon'";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han actualizado correctamente";
} else {
    echo "Error al actualizar los datos: " . $sql . "<br>" . $conn->error;
}

$conn->close();
