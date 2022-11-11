<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * from alumnos a JOIN grupos g ON g.id_Grupo = a.Grupo_idGrupo WHERE g.id_Grupo = $Grupo_idGrupo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" . " - ID de alumno: " . $row["idAlumno"] . "<br>" . 
        " - Numero de expediente: " . $row["expediente"] . "<br>" . 
        " - Nombre: " . $row["nombre"] . "<br>" . 
        " - Apellidos: " . $row["apellidos"] . "<br>" . 
        " - Email: " . $row["email"] . "<br>" . 
        " - Telefono: " . $row["telefono"] . "<br>";
        " - ID del grupo al que pertenece: " . $row["Grupo_idGrupo"] . "<br>";
        "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>