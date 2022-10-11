<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Calculadora Euros</title>
</head>
<?php
include_once ('euros.php');
?>
	<body>
	<h3>Calculadora de Euros a pesetas o viceversa.</h3>
<?php
if (isset($_POST['calcular'])) {
    if (! empty($_POST['pesetas'])) {
        $pesetas2euros = pesetas2euros($_POST['pesetas']);
    } else if (! empty($_POST['euros'])) {
        $euros2pesetas = euros2pesetas($_POST['euros']);
    }
}
?>
	<form action="calculadoraEuros.php" method="post">
		Pesetas: <input type="number" name="pesetas" value="<?=$euros2pesetas?>"> <br> 
		Euros: <input type="number" name="euros" value="<?=$pesetas2euros?>"> <br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>	
<?php 
if (isset($_POST['calcular'])) {
    if (! empty($_POST['pesetas'])) {
        echo "<br>El resultado es " . $pesetas2euros . " euros.";
    } else if (! empty($_POST['euros'])) {
        echo "<br>El resultado es " . $euros2pesetas . " pesetas.";
    }
}
?>
</body>
</html>