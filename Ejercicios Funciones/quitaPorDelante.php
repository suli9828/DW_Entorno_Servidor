<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Quitar por delante una cantidad de digitos de un numero que elijamos</title>
</head>
<body>
    <?php

    function quitaPorDelante(int $num, int $cant): int  {
        $numero = substr($num, $cant);
        return $numero;
    }

    echo quitaPorDelante(156874, 2);
    ?>
  </body>
</html>
