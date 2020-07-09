<?php require 'header.php';?>
<div class="contenedor">
                <div class="post">
                    <article>
                        <h2 class="titulo">Nuevo articulo</h2>
                        <form class="formulario" method="post" enctype = "multipart/form-data" action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>></form>
                        <input type="text" name="extracto" placeholder="Extracto del Articulo">
                        <textarea name="texto" placeholder="Texto del Articulño"></textarea>
                        <input type="file" name="thumb">

                        <input type="submit" value="Crear Articulo">           
                    </article>
                </div>
    </div>

<?php require 'footer.php';?>