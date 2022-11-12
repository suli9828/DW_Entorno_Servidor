<html>

<body>
    <?php
    require_once 'cabecera.php'; ?>

    <div id="principal">
        <h2>Grupos:</h2>

        <table class="styled-table">
            <tr>
                <th>ID del grupo</th>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Mostrar alumnos o profesores</th>
                <th>Modificar o eliminar</th>
            </tr>

            <?php
            $grupos = obtenerGrupos($db);
            if (!empty($grupos)) {
                while ($grupo = mysqli_fetch_assoc($grupos)) {
            ?>
            <tr>
                <td><?= $grupo['idGrupo'] ?></td>
                <td><?= $grupo['nombre'] ?></td>
                <td><?= $grupo['curso'] ?></td>
                <td><input type="hidden" value="<?= $idGrupo['idGrupo'] ?>"><a href='mostrarAlumnoGrupo.php'><input
                            type='button' name='alumnos' value='Mostrar alumnos de este grupo'></a><a
                        href='mostrarProfesorGrupo.php'><input type='submit' name='profesores'
                            value='Mostrar profesores de este grupo'></a>
                </td>
                <td>
                    <a href='deleteGrupo.php?idGrupo=<?= $grupo['idGrupo'] ?>'><input type='button' name='eliminagrupo'
                            value='Eliminar grupo'></a>
                    <a href='editaGrupo.php?
                        idGrupo=<?= $grupo['idGrupo'] ?>
                        nombre=<?= $grupo['nombre'] ?>
                        curso=<?= $grupo['curso'] ?>'>
                        <input type='button' name='editagrupo' value='Editar grupo'></a>
                </td>
            </tr>

            <?php
                }
            }
            ?>

        </table>
    </div>
</body>

</html>