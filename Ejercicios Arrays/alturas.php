<!DOCTYPE html>
<html lang="es-es">
<head>
    <title>Alturas</title>
</head>
<body>
    <?php
    $personas = [['Nombre'=>'Aitor', 'Altura'=>182, 'Email'=>'Aitor@correo.com'], ['Nombre'=>'Suli', 'Altura'=>175, 'Email'=>'Suli@correo.com'], ['Nombre'=>'Angel', 'Altura'=>179, 'Email'=>'Angel@correo.com'], ['Nombre'=>'Juan', 'Altura'=>205, 'Email'=>'Juan@correo.com'], ['Nombre'=>'Pepe', 'Altura'=>173, 'Email'=>'Pepe@correo.com']];

    echo "<table border=1>";
    echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
    foreach($personas as $gente){
        echo "<tr>";
        foreach($gente as $persona => $info){
            echo "<td>$info</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
