<?php

function digitoN(int $num, int $pos): int {
    $volteado = 0;
    while ($num >= 1) {
        $volteado = $volteado * 10 + ($num % 10);
        $num /= 10;
    }

    for ($i = 0; $i < $pos; $i ++) {
        $volteado = $volteado / 10;
    }

    return $volteado % 10;
}

echo digitoN(156874, 3);

?>