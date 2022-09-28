<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Cuadrado Bucles</title>
</head>
<body>
    <?php
    if ((isset($_POST['filas'])) && (isset($_POST['columnas'])) && ($_POST['filas'] > 0) && ($_POST['columnas'] > 0)) {
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];
        echo "<table border='1'>";
        for ($i = 0; $i < $filas; $i ++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j ++) {
                echo "<td>";
                if ($i == 0 || $j == 0 || $i == $filas - 1 || $j == $columnas - 1) {
                    echo $i, " - ", $j;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        ?>
        <form action="cuadrado.php" method="post">
		<p>Inserta las filas:</p>
		<input type="number" name="filas">
		<p>Inserta las columnas:</p>
		<input type="number" name="columnas"><br> <input type="submit"
			value="Mostrar tabla">
	</form>
        <?php
    }
    ?> 
</body>
</html>
