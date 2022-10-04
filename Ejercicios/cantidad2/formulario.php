<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Formulario</title>
</head>
<body>
<h3>Escribe los numeros para sumarlos.</h3>
 <?php
if (isset($_POST['enviar1'])) {
    $cantidad = $_POST['enviar1'];
    ?>
<form action="suma.php" method="post">
            <?php
    for ($i = 0; $i < $cantidad; $i ++) {
        echo "<input type='number' name='$i'><br>";
    }
    ?>
    <input type="hidden" name="enviar2" value="<?=$cantidad?>"> <input type="submit" value="Sumar">
	</form>
	<hr>
<?php
}
?>
</body>
</html>