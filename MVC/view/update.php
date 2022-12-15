<div class="update">
    <!-- Formulario que envía por post los nuevos datos de la nota al index con el action update y el id de la nota en cuestión. -->
    <form action="index.php?action=update&id=<?= $dataToView->getId() ?>" method="post">
        <div class="updateNote">
            <input class="titulo" type="text" value="<?= $dataToView->gettitulo() ?>" name="titulo"
                placeholder="Título..." />
            <hr />
            <textarea class="descripcion" name="descripcion"
                placeholder="Contenido..."><?= $dataToView->getdescripcion() ?></textarea>
        </div>
        <input class="ok" type="submit" value="Aceptar" />
    </form>
    <a href="index.php"><button class="cancel">Cancelar</button></a>
</div>