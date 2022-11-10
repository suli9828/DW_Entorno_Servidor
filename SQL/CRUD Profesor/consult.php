<?php
$servername = "localhost";
$username = "sulaiman";
$password = "123456";
$dbname = "instituto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT numExp, nombre, email from alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "numExp: " . $row["numExp"] . " - Nombre: " . $row["nombre"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>