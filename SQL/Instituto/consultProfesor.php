<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id_profesor, nombre, email from profesor";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID de profesor: " . $row["id_profesor"] . " - Nombre: " . $row["nombre"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>