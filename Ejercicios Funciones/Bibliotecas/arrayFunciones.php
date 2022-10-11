<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Operaciones matematicas</title>
</head>
<?php
include_once ('biblioteca.php');
?>
	<body>
	<h3>Selecciona que tipo de operacion quieres usar.</h3>
	<form action="arrayFunciones.php" method="post">
		<input type="radio" name="calculo" value="sumar">Suma <br> 
		<input type="radio" name="calculo" value="restar">Resta <br> 
		<input type="radio" name="calculo" value="multiplicar">Multiplicacion <br> 
		<input type="radio" name="calculo" value="dividir">Division <br>
		<br> 
		Introduce dos números: <br> 
		<input type="number" name="n1"><br>
		<input type="number" name="n2"><br> 
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php
    if (isset($_POST['calcular'])) {
        echo "<br>El resultado es = " . $_POST['calculo']($_POST['n1'], $_POST['n2']);
    }
    ?>
	</body>
</html>