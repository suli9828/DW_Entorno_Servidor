<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirmar borrar</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form action="#" method="POST">
                <div class="form-group mt-3">
                    <h3>¿Desea borrar la nota?</h3>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-danger" name="submit">
                        <i class="bi bi-trash"></i>
                        Borrar
                    </button>
                    <a href="index.php" class="btn btn-outline-danger">
                        <i class="bi bi-arrow-left"></i>
                        Volver
                    </a>
                </div>
            </form>
        </div>
    </div>
    <?php 

    $id = $_GET['id'];
        if(isset($_POST['submit'])){
            $dataToView->eliminar($id);
            echo "<div class='alert alert-success mt-3' role='alert'>
                    Nota borrada correctamente
                </div>";
            header('Refresh: 2; URL=index.php?action=list_note');
        }
    ?>
</body>

</html>