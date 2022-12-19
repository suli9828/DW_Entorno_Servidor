<div class="list">
    <a href="index.php?action=confirmInsert"><button class="insert">Crear nueva nota</button></a>
    <div class="listNotes">
        <?php
  if(count($dataToView) > 0){
    foreach($dataToView as $note){
      ?>
        <div class="note">
            <p class="titulo"><?= $note->gettitulo() ?></p>
            <hr />
            <div class="descripcion">
                <p class="descripcion"><?= $note->getdescripcion() ?></p>
            </div>

            <a href="index.php?action=confirmDelete&id=<?= $note->getId() ?>"><button
                    class="delete">Eliminar</button></a>

            <a href="index.php?action=confirmUpdate&id=<?= $note->getId() ?>"><button class="update">Editar</button></a>
        </div>
        <?php
    }
  } else { 
    ?>
        <p class="noNotes">No has creado ninguna nota todavía.</p>
        <?php
  }
  ?>
    </div>
</div>