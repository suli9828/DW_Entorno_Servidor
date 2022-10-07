<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Numero de digitos que tiene un numero</title>
</head>
<body>
    <?php

    function digitos(int $num): int {
        if ($num < 0) {
            $num = -$num;
        }
        if ($num == 0) {
            return 1;
        } else {
            $n = $num[0];
            while ($num > 0) {
                $num = $num / 10; 
                $n++; 
            }
            return $n;
        }
    }
    echo "Este numero tiene " . digitos(23) . " digitos";
    ?>
  </body>
</html>