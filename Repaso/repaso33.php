<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Numero Mayor</title>
</head>
<body>
    <?php
    function ordenarMayorMenor(...$numeros): int {
        $numeros = [8, 5, 40, 32, 65, 95, 1];
        rsort($numeros);
        foreach ($numeros as $pos => $val) {
            echo "[" . $pos . "] = " . $val . "<br>";
        }
        return $pos;
    }
    $numeros = 0;
    echo(ordenarMayorMenor($numeros));
    ?>
</body>
</html>