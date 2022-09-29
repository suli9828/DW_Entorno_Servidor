<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Alturas V2</title>
</head>
<body>
    <?php
    if (isset($_POST['numPers'])) {
        $numPers = $_POST['numPers'];
        if (isset($_POST['nombre0'])) {
            for ($i = 0; $i < $numPers; $i ++) {
                $personas[$i] = [
                    'Nombre' => $_POST['nombre' . $i],
                    'Altura' => $_POST['altura' . $i],
                    'Email' => $_POST['email' . $i]
                ];
            }
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
            foreach ($personas as $gente) {
                echo "<tr>";
                foreach ($gente as $persona => $info) {
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<form action='alturasv2.php' method='post'>";
            for ($i = 0; $i < $numPers; $i ++) {
                echo "Nombre: ";
                echo "<input type='text' name='nombre" . $i . "'> ";
                echo "Altura: ";
                echo "<input type='number' name='altura" . $i . "'> ";
                echo "Email: ";
                echo "<input type='email' name='email" . $i . "'> ";
                echo "<input type='hidden' name='numPers' value='" . $numPers . "'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    } else {
        ?>
        <form action="alturasv2.php" method="post">
		<p>�Cu�ntas personas va a a�adir?</p>
		<input type="number" name="numPers"> <input type="submit"
			value="Enviar">
	</form>
        <?php
    }
    ?>
</body>
</html>