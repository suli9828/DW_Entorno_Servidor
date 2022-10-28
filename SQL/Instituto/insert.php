<?php
$servername = "localhost";
$username = "sulaiman";
$password = "123456";
$dbname = "instituto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO alumnos (numExp, nombre, apellidos, email, telefono) VALUES (9828, 'Sulaiman', 'Taieb', '9828@cifpceuta.es', 610321148)";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
