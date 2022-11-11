<html>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * from grupos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" . " - ID de grupo: " . $row["idGrupo"] . "<br>" . " - Nombre: " . $row["nombre"] . "<br>" . " - Curso: " . $row["curso"] . "<br>" . "<input type='hidden' value='$Grupo_idGrupo'>" . "<a href='mostrarAlumnoGrupo.php'><input type='button' name='alumnos' value='Alumnos'></a>" . "<input type='hidden' value='$Grupo_idGrupo'>" . "<a href='mostrarProfesorGrupo.php'><input type='submit' name='profesores' value='Profesores'></a>" . "<br>";
    }
} else {
    echo "Ningun resultado";
}

$conn->close();
?>
</body>
</html>