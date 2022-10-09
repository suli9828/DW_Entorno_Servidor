<?php

function quitaPorDelante(int $num, int $cant): int {
    $volteado = 0;
    while ($num >= 1) {
        $volteado = $volteado * 10 + ($num % 10);
        $num /= 10;
    }

    for ($i = 0; $i < $cant; $i ++) {
        $volteado /= 10;
    }

    $num = 0;
    while ($volteado >= 1) {
        $num = $num * 10 + ($volteado % 10);
        $volteado /= 10;
    }

    return intval($num);
}

echo quitaPorDelante(156874, 4);
?>