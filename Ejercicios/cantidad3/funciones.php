<?php
function crearFormulario (int $cantidad){

    echo '<form action="cantidad.php" method="post">';
    for($i = 0; $i < $cantidad; $i++){
        echo "<input type='number' name='n".$i."'>";
    }
    echo '<tr><td><input type="submit" value="Sumar" name="enviar2"></td></tr>';
    echo "<input type='hidden' name='cantidad' value='$cantidad'>";
    echo '</form>';}

function suma (int $cantidad){
    $cantidad = $_POST['cantidad'];
    $suma = 0;
    for($i = 0; $i < $cantidad; $i++){
        $suma += $_POST['n'.$i];
    }
        echo "La suma es $suma";
    }
?>