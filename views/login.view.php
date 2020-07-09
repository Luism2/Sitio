<?php require 'header.php'; ?>

    <div class="contenedor">
                <div class="post">
                    <article>
                        <h2 class="titulo"><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo'] ?></a></h2>
                        <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"></form>
                           <input type="text" name ="usuario" placeholder = "Usuario">
                           <input type="password" name="password" placeholder="Contraseña">
                           <input type="submit" value="Iniciar Secion">
                     </article>
                </div>
            <?php endforeach; ?>


        <?php require 'paginacion.php'; ?>
    </div>

<?php require 'footer.php'; ?>