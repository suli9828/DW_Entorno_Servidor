<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Repaso 2</title>
</head>
<body>
    <?php
    if (isset($_POST['numVehiculos'])) {
        $numVehiculos = $_POST['numVehiculos'];
        if (isset($_POST['matricula0'])) {
            for ($i = 0; $i < $numVehiculos; $i ++) {
                $vehiculos[$i] = [
                    'Matricula' => $_POST['matricula' . $i],
                    'Marca' => $_POST['marca' . $i],
                    'Modelo' => $_POST['modelo' . $i]
                ];
            }
            echo "<table border=1>";
            echo "<tr><th>Matricula</th><th>Marca</th><th>Modelo</th></tr>";
            foreach ($vehiculos as $coche) {
                echo "<tr>";
                foreach ($coche as $vehiculo => $info) {
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<form action='repaso2.php' method='post'>";
            for ($i = 0; $i < $numVehiculos; $i ++) {
                echo "Matricula: ";
                echo "<input type='text' name='" . $i . "'> ";
                echo "Marca: ";
                echo "<input type='text' name='" . $i . "'> ";
                echo "Modelo: ";
                echo "<input type='text' name='" . $i . "'> ";
                echo "<input type='hidden' name='numVehiculos' value='" . $numVehiculos . "'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    } else {
        ?>
        <form action="repaso2.php" method="post">
		<p>¿Cuantos vehiculos vas a añadir?</p>
		<input type="number" name="numVehiculos"> <input type="submit"
			value="Enviar">
	</form>
        <?php
    }
    ?>
</body>
</html>