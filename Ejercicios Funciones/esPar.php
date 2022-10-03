<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Es Par</title>
</head>
<body>
    <?php
    function esPar(int $num)
    {
        return ($num % 2 == 0);
    }
    ?>
    <h1>Introduce un numero para saber si es par o no.</h1>
    <form action="esPar.php" method="post">
		<input type="number" name="numero"> <input type="submit" name="consultar" value="Consultar">
	</form>
	<hr>
    <?php
    if (isset($_POST['consultar'])) {
        $numero = $_POST['numero'];
        echo "El numero $numero";
        if (! esPar($numero)) {
            echo " no";
        }
        echo " es par.";
    }
    ?>
</body>
</html>
