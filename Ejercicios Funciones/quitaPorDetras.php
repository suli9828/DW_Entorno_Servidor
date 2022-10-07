<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Quitar por detras una cantidad de digitos de un numero que elijamos</title>
</head>
<body>
    <?php

    function quitaPorDetras(int $num, int $cant): int {
        $numero = substr($num, $cant);
        return $numero;
    }

    echo quitaPorDetras(156874, 2);
    ?>
  </body>
</html>
