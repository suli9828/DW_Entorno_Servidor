<?php

function crearFormulario(int $cantidad){
    echo '<form action="principal.php" method="post">';
    echo 'Introduce ' . $cantidad . ' numeros: <br>';
    for ($i = 0; $i < $cantidad; $i ++) {
        echo "<input type='number' name='num" . $i . "'><br><br>";
    }
    echo '<input type="submit" value="Sumar" name="enviar2">';
    echo "<input type='hidden' name='cantidad' value='$cantidad'>";
    echo '</form>';
}

function suma(int $cantidad)
{
    $cantidad = $_POST['cantidad'];
    $suma = 0;
    for ($i = 0; $i < $cantidad; $i ++) {
        $suma += $_POST['num' . $i];
    }
    ?>
    <?php 
    echo "La suma es " . $suma; 
    ?>

    <?php
}
?>