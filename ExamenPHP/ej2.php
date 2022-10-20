<!DOCTYPE html>
<html lang="es-es">

<head>
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
    if (isset($_POST['numAlumnos'])) {
        $numAlumnos = $_POST['numAlumnos'];
        if (isset($_POST['nombre0'])) {
            for ($i = 0; $i < $numAlumnos; $i++) {
                $personas[$i] = [
                    'Nombre' => $_POST['nombre' . $i],
                    'Apellidos' => $_POST['apellidos' . $i],
                    'Año de nacimiento' => $_POST['anio' . $i]
                ];
            }
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th>Apellidos</th><th>Año de nacimiento</th></tr>";
            foreach ($personas as $gente) {
                echo "<tr>";
                foreach ($gente as $persona => $info) {
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<form action='ej2.php' method='post'>";
            for ($i = 0; $i < $numAlumnos; $i++) {
                echo "Nombre: ";
                echo "<input type='text' name='nombre" . $i . "'>";
                echo "&nbspApellidos: ";
                echo "<input type='text' name='apellidos" . $i . "'>";
                echo "&nbspAño de nacimiento: ";
                echo "<input type='number' name='anio" . $i . "'> <br>";
                echo "<input type='hidden' name='numAlumnos' value='" . $numAlumnos . "'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    } else {
    ?>
        <form action="ej2.php" method="post">
            <p>¿Cuantos alumnos vas a añadir?</p>
            <input type="number" name="numAlumnos"> <input type="submit" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>