<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * from alumno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" . "ID de alumno: " . $row["id_alumno"] . "<br>" . 
        "Numero de expediente: " . $row["numExp"] . "<br>" . 
        "Nombre: " . $row["nombre"] . "<br>" . 
        "Apellidos: " . $row["apellidos"] . "<br>" . 
        "Email: " . $row["email"] . "<br>" . 
        "Telefono: " . $row["telefono"] . "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>