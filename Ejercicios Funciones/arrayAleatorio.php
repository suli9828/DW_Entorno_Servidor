<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Array Aleatorio</title>
</head>
<body>
    <?php
    function arrayAleatorio(int $tam, int $min, int $max, &$array){
        for ($i = 0; $i < $tam; $i ++) {
            $array[$i] = rand($min, $max);
        }
        return $array;
    }
    ?>
    <h3>Escribe el tamanio que quieres que tenga el array, su maximo y su minimo.</h3>
    <hr>
    <form action="arrayAleatorio.php" method="post">
		<p>Tamanio</p>
		<input type="number" name="tam">
		<p>Maximo</p>
		<input type="number" name="max">
		<p>Minimo</p>
		<input type="number" name="min">
		<br> 
		<br> 
		<input type="submit" name="generar"
			value="Generar Array">
	</form>
	<hr>
    <?php
    if (isset($_POST['generar'])) {
        $tam = $_POST['tam'];
        $max = $_POST['max'];
        $min = $_POST['min'];
        $array = array();

        arrayAleatorio($tam, $min, $max, $array);
        foreach ($array as $numero) {
            echo $numero . " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
