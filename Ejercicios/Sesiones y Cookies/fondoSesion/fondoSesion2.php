<?php
session_start();
$_SESSION['fondo'] = $_POST['color'];
?>
<!DOCTYPE html>
<html lang="es-es">

<head>
    <style>
    body {
        background-color: <?=$_SESSION['fondo'] ?>;
    }

    a {
        text-decoration: none;
        color: black;
    }
    </style>
</head>

<body>
    <form action="restableceFondo.php">
        <input type="submit" value="Restablecer color de fondo">
    </form>
    <br>
    <button><a href="fondo.php">Volver a página anterior</a></button>
</body>

</html>