<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Array bidimensional de 6 por 9</title>
</head>
<body>
	<h1><u>Array bidimensional de 6 por 9</u></h1>
        <?php
        const FILAS = 6;
        const COLUMNAS = 9;
    
        for ($i = 0; $i < FILAS * COLUMNAS; $i ++) {
            $num[$i] = rand(99, 1000);
            for ($j = 0; $j < $i; $j ++) {
                while ($num[$i] == $num[$j]) {
                    $num[$i] = rand(99, 1000);
                    $j = 0;
                }
            }
        }
    
        $mayor = $num[0];
        $menor = $num[0];
        $s = 0;
        for ($i = 0; $i < FILAS; $i ++) {
            for ($j = 0; $j < COLUMNAS; $j ++) {
                $numBi[$i][$j] = $num[$s];
                if ($numBi[$i][$j] < $menor) {
                    $menor = $numBi[$i][$j];
                    $filaMenor = $i;
                } else if ($numBi[$i][$j] > $mayor) {
                    $mayor = $numBi[$i][$j];
                    $columnaMayor = $j;
                }
                $s ++;
            }
        }
    
        echo "<table border=1>";
        for ($i = 0; $i < FILAS; $i ++) {
            echo "<tr>";
            for ($j = 0; $j < COLUMNAS; $j ++) {
                if ($i == $filaMenor && $j == $columnaMayor) {
                    echo "<td style='background-color: red;'>" . $numBi[$i][$j] . "</td>";
                } else if ($i == $filaMenor) {
                    echo "<td style='background-color: green;'>" . $numBi[$i][$j] . "</td>";
                } else if ($j == $columnaMayor) {
                    echo "<td style='background-color: blue;'>" . $numBi[$i][$j] . "</td>";
                } else {
                    echo "<td style='background-color: black; color: grey;'>" . $numBi[$i][$j] . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>