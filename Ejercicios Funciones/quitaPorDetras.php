<?php

function quitaPorDetras(int $num, int $cant): int {
    for ($i = 0; $i < $cant; $i ++) {
        $num /= 10;
    }

    return intval($num);
}

echo quitaPorDetras(156874, 2);
?>