<?php

session_start();

if(!isset($_SESSION['sesion'])) header('Location: index.php');

?>
<!DOCTYPE html>
<html lang="es-es">

<head>
    <title>Sesión iniciada</title>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>
    <h1 class="main">Sesión iniciada, bienvenido señor/a.</h1>
    <button class="logout"><a href="logout.php">Cerrar sesión</a></button>
</body>

</html>