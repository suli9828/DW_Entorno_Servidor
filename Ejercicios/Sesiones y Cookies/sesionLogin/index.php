<?php

session_start();

if(isset($_SESSION['sesion'])) header('Location: main.php');

?>
<!DOCTYPE html>
<html lang="es-es">

<head>
    <title>Autenticación de usuarios</title>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>
    <div class="login-box">
        <h2>Iniciar sesión</h2>
        <form action="login.php" method="post">
            <div class="user-box">
                <label>Usuario<br></label>
                <input type="text" name="username" required="">
            </div>
            <div class="user-box">
                <label>Contraseña<br></label>
                <input type="password" name="passwd" required="" />
            </div>
            <input type="submit" class="boton" value="Iniciar sesión" />
        </form>
    </div>
</body>

</html>