<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Array Pares</title>
    <?php require_once 'funciones.php'; ?>
</head>
<body>
<?php
if(isset($_POST['enviar1'])){
    crearFormulario($_POST['cantidad']);
} else if (isset($_POST['enviar2'])) {
    suma($_POST['cantidad']);
} else {
?>
    <div style="width: 50%; margin: auto; margin-top: 6%;">
        <form action="principal.php" method="post">
            <table style="width: 50%; margin: auto; text-align: center;">
                <tr>
                    <th>Introduce una cantidad: </th>
                </tr>
                <tr>
                    <td><input type="number" name="cantidad" placeholder="Cantidad..."></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar" name="enviar1"></td>
                </tr>
            </table>
        </form>
    </div>
<?php
}
?>
</body>
</html>