<?php
function capicua(int $numero)
{
    $inverso = 0;
    $v1 = $numero;
    while ($v1 != 0) {
        $v2 = $v1 % 10;
        $inverso = $inverso * 10 + $v2;
        $v1 = (int)($v1 / 10);
    }
    if ($numero == $inverso)
        echo "$numero Es capicua";
    else
        echo "$numero No es capicua";
}
echo capicua(19991);
