<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Cantidad</title>
    <?php require_once('funciones.php'); ?>
</head>
<body>
<?php
if (isset($_POST['enviar1'])) {
    crearFormulario($_POST['enviar1']);
} else if (isset($_POST['enviar2'])) {
    suma($_POST['cantidad']);
} else {
    ?>
  <form action="principal.php" method="post">
		<p>Introduce la cantidad de numeros que quieres sumar.</p>
		<input type="number" name="enviar1"><br> <input type="hidden" name="suma"
			value="0"> <br> <input type="submit" value="Siguiente">
	</form>
<?php
}
?>
</body>
</html>
