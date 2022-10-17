  <!DOCTYPE html>
<html lang="es-es">
<head>
<title>Numero Mayor</title>
</head>
<body>
<?php
function mayor(array $nums){
    
    $mayor = $nums[0];
    for($i = 0; $i < count($nums); $i++){
        if($nums[$i] >= $mayor){
            $mayor = $nums[$i];
        }
    }
    return $mayor;
    
}
   function ordenarMayorMenor(...$nums){
        // Si no se han introducido valores, devuelve false.
        if(count($nums) == 0){
            return false;
        } else {
            // Array que va a contener los valores en orden.
            $ordenados = array();
            // Variable que va a contener el tamaño del array nums.
            $size = count($nums);
            // Bucle for que recorre el array en busca del mayor valor.
            for($i = 0; $i < $size; $i++){
                // Cuando solo queda un valor en el array nums.
                if($size == 1){
                    // Se añade al final del array ordenados sin más.
                    array_push($ordenados, $nums[0]);
                // Si no, si el índice actual contiene el mayor valor.
                } else if ($nums[$i] == mayor($nums)){
                    // Lo añade al final del array ordenados.
                    array_push($ordenados, $nums[$i]);
                    // Borra el valor del array nums.
                    unset($nums[$i]);
                    // Reestructura el array $nums, rellenando el hueco que se
                    // ha quedado al borrar el valor mayor.
                    reestructura($nums);
                    // Ahora el array tiene un elemento menos, por lo que el tamaño disminuye.
                    $size--;
                    // Se reinicia la varible i para reiniciar el bucle.
                    $i = -1;
                    // Se pone -1 porque al inciar otra vez el bucle se va a sumar 1,
                    // haciendo que realmente al entrar i valga 0.
                }
            }
            // Devualve el array con los valores ordenados.
            return $ordenados;
        }
    }    

    $array = ordenarMayorMenor(1, 2, 3, 4, 5, 7, 6);

    foreach($array as $num){
        echo $num." ";
    }

    ?>
</body>
</html>