        <?php
        if (isset($_POST['0'])) {
            $cantidad = $_POST['enviar2'];
            $suma = 0;
            for ($i = 0; $i < $cantidad; $i ++) {
                $suma += $_POST[$i];
            }
            echo "La suma es $suma";
        }
        ?>