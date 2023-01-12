<?php
session_start();
if(!isset($_SESSION['fondo'])){
  $_SESSION['fondo'] = 'white';
}
?>
<!DOCTYPE html>
<html lang="es-es">

<head>
    <style>
    body {
        background-color: <?=$_SESSION['fondo'] ?>;
    }
    </style>

<body>
    <form action="fondoSesion2.php" method="post">
        <select name="color">
            <option value="white" selected>Blanco</option>
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
            <option value="black">Negro</option>
            <option value="yellow">Amarillo</option>
            <option value="purple">Morado</option>
        </select>
        <input type="submit" value="Cambiar color de fondo">
    </form>
</body>

</html>