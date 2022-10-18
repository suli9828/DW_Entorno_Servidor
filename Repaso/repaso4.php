<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Invertir array</title>
</head>
<body>
<?php
function invertir(array $array) {
    $j = 0;
    for ($i = count($array) - 1; $i >= 0; $i --) {
        $invertido[$j] = $array[$i];
        $j ++;
    }
    return $invertido;
}

$array = [8, 5, 40, 32, 65, 95, 1];
?>
<h3>Array original</h3>
<?php
foreach ($array as $valor) {
    echo $valor . " ";
}

echo "<br>";
?>
<h3>Array invertido</h3>
<?php
foreach (invertir($array) as $num) {
    echo $num . " ";
}

?>
</body>
</html>