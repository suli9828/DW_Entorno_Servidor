<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Numero Mayor</title>
</head>
<body>
    <?php
    function mayor(...$numeros): int {
        if (count($numeros) == 0) {
            return false;
        } else {
            $mayor = $numeros[0];
            foreach ($numeros as $num) {
                if ($num > $mayor) {
                    $mayor = $num;
                }
            }
            return $mayor;
        }
    }
    echo "De todos los numeros, el numero mayor es " . mayor(16, 85, 90, 183, 17,) . ".";
    ?>
</body>
</html>