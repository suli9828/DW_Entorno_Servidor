<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Alturas 2</title>
</head>
<style>
        #alto td {
            background-color: red;
        }
        #bajo td{
            background-color: green;
        }
    </style>
<body>
    <?php
    if (isset($_POST['numPersonas'])) {

        $numPersonas = $_POST['numPersonas'];

        if (isset($_POST['nombre0'])) {
            for ($i = 0; $i < $numPersonas; $i ++) {
                $personas[$i] = [
                    'Nombre' => $_POST['nombre' . $i],
                    'Altura' => $_POST['altura' . $i],
                    'Email' => $_POST['email' . $i]
                ];
            }

            $Alto = $personas[0]['Altura'];
            $Bajo = $personas[0]['Altura'];
            foreach ($personas as $gente) {
                if ($gente['Altura'] > $Alto) {
                    $Alto = $gente['Altura'];
                } else if ($gente['Altura'] < $Bajo) {
                    $Bajo = $gente['Altura'];
                }
            }
            
            ?>
            <p>Las filas de color verde muestran a la persona más bajita.</p>
            <p>Las filas de color rojo muestran a la persona más alta.</p>
            
            <?php
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
            foreach ($personas as $gente) {

                if ($gente['Altura'] == $Alto) {
                    echo "<tr id='alto'>";
                } else if ($gente['Altura'] == $Bajo) {
                    echo "<tr id='bajo'>";
                } else {
                    echo "<tr>";
                }

                foreach ($gente as $personas => $info) {
                    echo "<td>$info</td>";
                }

                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<form action='Alturas2.php' method='post'>";
            for ($i = 0; $i < $numPersonas; $i ++) {
                echo "Nombre: ";
                echo "<input type='text' name='nombre" . $i . "'> ";
                echo "Altura: ";
                echo "<input type='number' name='altura" . $i . "'> ";
                echo "Email: ";
                echo "<input type='email' name='email" . $i . "'> ";
                echo "<input type='hidden' name='numPersonas' value='" . $numPersonas . "'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    } else {
        ?>
        <form action="Alturas2.php" method="post">
		<p>¿Cuántas personas vas a añadir?</p>
		<input type="number" name="numPersonas"> <input type="submit"
			value="Enviar">
	</form>
        <?php
    }
    ?>
</body>
</html>
