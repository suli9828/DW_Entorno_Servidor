<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id_grupo, nombre, curso from grupo";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID de grupo: " . $row["id_grupo"] . " - Nombre: " . $row["nombre"] . " - Curso: " . $row["curso"] . "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>