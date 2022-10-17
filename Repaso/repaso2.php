<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Repaso 2</title>
</head>
<body>
    <?php
    if (isset($_POST['numVeh'])) {
        $numVeh = $_POST['numVeh'];
        if (isset($_POST['nombre0'])) {
            for ($i = 0; $i < $numVeh; $i ++) {
                $coches[$i] = [
                    'Matricula' => $_POST['matricula' . $i],
                    'Marca' => $_POST['marca' . $i],
                    'Modelo' => $_POST['modelo' . $i]
                ];
            }
            echo "<table border=1>";
            echo "<tr><th>Matricula</th><th>Marca</th><th>Modelo</th></tr>";
            foreach ($coches as $vehiculos) {
                echo "<tr>";
                foreach ($vehiculos as $vehiculo => $info) {
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<form action='repaso2.php' method='post'>";
            for ($i = 0; $i < $numVeh; $i ++) {
                echo "Matricula: ";
                echo "<input type='text' name='matricula" . $i . "'> ";
                echo "Marca: ";
                echo "<input type='text' name='marca" . $i . "'> ";
                echo "Modelo: ";
                echo "<input type='text' name='modelo" . $i . "'> ";
                echo "<input type='hidden' name='numVeh' value='" . $numVeh . "'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    } else {
        ?>
        <form action="repaso2.php" method="post">
		<p>¿Cuantos vehiculos va a añadir?</p>
		<input type="number" name="numVeh"> <input type="submit"
			value="Enviar">
	</form>
        <?php
    }
    ?>
</body>
</html>
