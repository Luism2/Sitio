<?php require '../views/header.php'; ?>

    <div class="contenedor">
     <h2>panel de control</h2>
     <a href="nuevo.php" class="bnt">Nuevo</a>
     <a href="cerrar.php" class="bnt">Cerrar secion</a>
            <?php foreach($posts as $post): ?>
                <div class="post">
                    <article>
                       <h2 class="titulo"><?php echo $post ['id'] . '.-' .  $post['titulo']; ?></h2>
                       <a href="editar.php?id=<?php echo $post ['id']; ?>">Editar</a>
                       <a href="../single.php?id=<?php echo $post ['id']; ?>">Ver</a>
                       <a href="borror.php?id=<?php echo $post ['id']; ?>">Borrar</a>
                    </article>
                </div>
            <?php endforeach; ?>


        <?php require 'paginacion.php'; ?>
    </div>

<?php require '../views/footer.php'; ?>