<!DOCTYPE html>
<html lang="es-es">

<head>
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    const FILAS = 5;
    const COLUMNAS = 8;

    for ($i = 0; $i < FILAS * COLUMNAS; $i++) {
        $num[$i] = rand(100, 999);
        for ($j = 0; $j < $i; $j++) {
            while ($num[$i] == $num[$j]) {
                $num[$i] = rand(100, 999);
                $j = 0;
            }
        }
    }

    $s = 0;
    for ($i = 0; $i < FILAS; $i++) {
        for ($j = 0; $j < COLUMNAS; $j++) {
            $numBi[$i][$j] = $num[$s];
            $s++;
        }
    }

    echo "<table border=1>";
    for ($i = 0; $i < FILAS; $i++) {
        echo "<tr>";
        for ($j = 0; $j < COLUMNAS; $j++) {
            if ($i == $filaMenor && $j == $columnaMayor) {
                echo "<td>" . $numBi[$i][$j] . "</td>";
            } else if ($i == $filaMenor) {
                echo "<td>" . $numBi[$i][$j] . "</td>";
            } else if ($j == $columnaMayor) {
                echo "<td>" . $numBi[$i][$j] . "</td>";
            } else {
                echo "<td>" . $numBi[$i][$j] . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>