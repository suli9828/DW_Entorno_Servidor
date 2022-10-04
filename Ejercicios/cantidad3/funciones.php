<?php
function crearFormulario (int $cantidad){
    
    echo '<div style="width: 50%; margin: auto; margin-top: 6%;">';
    echo '<form action="principal.php" method="post">';
    echo '<table style="width: 50%; margin: auto; text-align: center;">';
    echo '<tr><th>Introduce <?php echo $cantidad; ?> números: </th></tr>';
    for($i = 0; $i < $cantidad; $i++){
        echo "<tr><td><input type='number' name='n".$i."'></td></tr>";
    }
    echo '<tr><td><input type="submit" value="Sumar" name="enviar2"></td></tr>';
    echo '</table>';
    echo "<input type='hidden' name='cantidad' value='$cantidad'>";
    echo '</form>';
    echo '</div>';
}

function suma (int $cantidad){
    $cantidad = $_POST['cantidad'];
    $suma = 0;
    for($i = 0; $i < $cantidad; $i++){
        $suma += $_POST['n'.$i];
    }
        echo "La suma es $suma";
    }
?>