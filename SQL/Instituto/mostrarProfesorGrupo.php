<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * from profesores WHERE idProfesor = 12";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br>" . " - ID de profesor: " . $row["idProfesor"] . "<br>" . " - Nombre: " . $row["nombre"] . "<br>" . " - Apellidos: " . $row["apellidos"] . "<br>" . "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>