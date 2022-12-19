<div class="delete">
    <div class="deleteNote">
        <p class="titulo"><?= $dataToView->gettitulo() ?></p>
        <hr />
        <p class="descripcion"><?= $dataToView->getdescripcion() ?></p>
    </div>
    <form action="index.php?action=delete&id=<?= $dataToView->getId() ?>" method="post">
        <input class="delete" type="submit" value="Eliminar" />
    </form>
    <a href="index.php"><button class="cancel">Cancelar</button></a>
</div>