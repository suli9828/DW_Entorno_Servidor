<?php
$servername = "localhost";
$username = "sulaiman";
$password = "123456";
$dbname = "instituto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "DELETE FROM alumnos WHERE numExp=9828";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han borrado correctamente";
} else {
    echo "Error al borrar los datos: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>