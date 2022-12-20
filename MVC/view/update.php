<div class="update">
    <form action="index.php?action=update&id=<?= $dataToView->getId() ?>" method="post">
        <div class="updateNote">
            <input class="titulo" type="text" value="<?= $dataToView->gettitulo() ?>" name="titulo"
                placeholder="Nombre del alumno" />
            <hr />
            <textarea class="descripcion" name="descripcion"
                placeholder="Nota del alumno"><?= $dataToView->getdescripcion() ?></textarea>
        </div>
        <input class="ok" type="submit" value="Aceptar" />
    </form>
    <a href="index.php"><button class="cancel">Cancelar</button></a>
</div>