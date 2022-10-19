<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Menor a mayor</title>
</head>
<body>
    <?php
    function ordenarMenormayor(...$nums) {
        if (count($nums) == 0) {
            return false;
        } else {
            for ($i = 0; $i < count($nums) - 1; $i ++) {
                for ($j = $i + 1; $j < count($nums); $j ++) {
                    if ($nums[$j] < $nums[$i]) {
                        $aux = $nums[$j];
                        $nums[$j] = $nums[$i];
                        $nums[$i] = $aux;
                    }
                }
            }
            return $nums;
        }
    }
    foreach (ordenarMenormayor(8, 5, 40, 32, 65, 95, 100) as $num) {
        echo $num . " ";
    }
    ?>
</body>
</html>