<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Repaso 1</title>
    <?php require_once('repaso1_1.php'); ?>
</head>
<body>
<?php
if (isset($_POST['enviar1'])) {
    crearFormulario($_POST['enviar1']);
} else if (isset($_POST['enviar2'])) {
    promedio($_POST['cantidad']);
} else {
    ?>
  <form action="repaso1.php" method="post">
		<p>Introduce la cantidad de numeros.</p>
		<input type="number" name="enviar1"><br> <input type="hidden" name="promedio"
			value="0"> <br> <input type="submit" value="Siguiente">
	</form>
<?php
}
?>
</body>
</html>
