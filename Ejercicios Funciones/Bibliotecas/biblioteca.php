<?php

function sumar(...$numeros): int {
    $suma = 0;

    for ($i = 0; $i < count($numeros); $i ++) {
        $suma += $numeros[$i];
    }

    return $suma;
}

function restar(...$numeros): int {
    $resta = $numeros[0];

    for ($i = 1; $i < count($numeros); $i ++) {
        $resta -= $numeros[$i];
    }

    return $resta;
}

function multiplicar(...$numeros): int {
    $multiplicacion = $numeros[0];

    for ($i = 1; $i < count($numeros); $i ++) {
        $multiplicacion *= $numeros[$i];
    }

    return $multiplicacion;
}

function dividir(...$numeros): int {
    $division = $numeros[0];

    for ($i = 1; $i < count($numeros); $i ++) {
        $division /= $numeros[$i];
    }

    return $division;
}

?>
