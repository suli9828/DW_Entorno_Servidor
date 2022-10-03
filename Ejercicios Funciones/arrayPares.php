<!DOCTYPE html>
<html lang="es-es">
<head>
    <title>Array Pares</title>
    <?php require_once('arrayAleatorio.php'); ?>
</head>
<body>
    <?php
        function arrayPares(array $array) {
            $pares = 0;
            for($i = 0; $i < count($array); $i++){
                if($array[$i] % 2 == 0) {
                    $pares++;
                }
            }
            return $pares;
        }
        if(isset($_POST['generar'])){
            echo "Hay ". arrayPares($array) ." numeros pares";
        }
    ?>
</body>
