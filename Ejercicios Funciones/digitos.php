<?php

function digitos(int $num): int {
    $contador = 0;
    while ($num >= 1) {
        $num /= 10;
        $contador ++;
    }
    return $contador;
}

echo "Este numero tiene " . digitos(156874) . " digitos.";

?>