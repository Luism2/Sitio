<?php require 'header.php';?>
<div class="contenedor">
                <div class="post">
                    <article>
                        <h2 class="titulo">Ediar Articulo</h2>
                        <form class="formulario" method="post" enctype = "multipart/form-data" action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>></form>
                        <imput type="hidden" value="<?php echo $post['id'];?>" name="id">

                        <input type="text" name="titulo" value="<?php echo $post['titulo'];?>>
                        <input type="text" name="extracto" value="<?php echo $post['extracto'];?>">
                        <textarea name="texto">value="<?php echo $post['titulo'];?></textarea>
                        <input type="file" name="thumb">
                        <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'];?>">

                        <input type="submit" value="Modificar Articulo">           
                    </article>
                </div>
    </div>

<?php require 'footer.php';?>