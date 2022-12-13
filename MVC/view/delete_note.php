<!DOCTYPE html>
<html lang="en">

<head>
    <title>Borrar</title>
</head>

<body>
    <?php
        $id = $_GET['id'];
        $nota = $dataToView->getNota($id);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3><?php echo $nota[0]->title; ?></h3>
                    </div>
                    <div class="card-body">
                        <p><?php echo $nota[0]->content; ?></p>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <a href="index.php?action=confirm_delete_note&id=<?php echo $nota[0]->id; ?>"
                        class="btn w-25 btn-danger">
                        <i class="bi bi-trash"></i>
                        Borrar
                    </a>
                    <a href="index.php?action=list_note" class="btn w-25 btn-primary">
                        <i class="bi bi-arrow-left"></i>
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>