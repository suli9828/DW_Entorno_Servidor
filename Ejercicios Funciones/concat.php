<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Concatenar palabras</title>
</head>
<body>
    <?php
    function concatenar(...$palabras): string {
        if (count($palabras) == 0) {
            return false;
        } else {
            $concat = "";
            foreach ($palabras as $palabra) {
                $concat = $concat . " " . $palabra;
            }
            return $concat;
        }
    }
    echo "El resultado seria: <hr>" . concatenar('Hola','Que','Tal');
    ?>
</body>
</html>