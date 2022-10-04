<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Array Pares</title>
    <?php include 'funciones.php'; ?>
</head>
<body>
	<?php
if (isset($_POST['enviar1'])) {
    crearFormulario($_POST['cantidad']);
} else if (isset($_POST['enviar2'])) {
    suma($_POST['cantidad']);
} else {
    ?>
	<form action="funciones.php" method="post">
	<p>Introduce un número.</p>
		<input type="number" name="enviar1"> <input type="hidden" name="suma"
			value="0"> <br> <input type="submit" value="Siguiente">
	</form>
	<?php
}
?>
</body>
</html>
