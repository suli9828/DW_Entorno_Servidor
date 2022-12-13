<!DOCTYPE html>
<html lang="en">

<head>
    <title>Listar</title>
</head>

<body>


    <?php
        $listaNotas = $dataToView->listar();
    ?>
    <div class="container">
        <a href="index.php?action=insert_note" class="btn btn-primary btn-floating "
            style="position: fixed; bottom: 20px; right: 20px;">
            <i class="bi bi-plus-circle fs-2"></i>
        </a>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope='col' class="fs-4">id</th>
                            <th scope='col' class="fs-4">Título</th>
                            <th scope='col' class="fs-4">Contenido</th>
                            <th scope='col' class="fs-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaNotas as $nota): ?>
                        <tr>
                            <th scope='row'>
                                <?php echo $nota->id; ?>
                            </th>
                            <td>
                                <?php echo $nota->title; ?>
                            </td>
                            <td>
                                <?php echo $nota->content; ?>
                            </td>
                            <td>
                                <a href="index.php?action=edit_note&id=<?php echo $nota->id; ?>"
                                    class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                    Editar
                                </a>
                                <a href="index.php?action=delete_note&id=<?php echo $nota->id; ?>"
                                    class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                    Borrar
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
        if(!$listaNotas){
            echo "<div class='alert alert-danger text-center mt-3' role='alert'>
                    No hay notas
                </div>";
        }
    ?>

</body>

</html>