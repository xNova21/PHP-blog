<?php require 'header.php'; ?>

<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"> Editar Articulo</h2>
                <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" method="POST">
                <input type="hidden" value="<?php echo $post['id'] ?>" name="id">
                <input type="text" name="titulo"  value="<?php echo $post['titulo'] ?>">
                <input type="text" name="extracto"  value="<?php echo $post['extracto'] ?>">
                <textarea name="texto" ><?php echo $post['texto'] ?></textarea>
                <input type="submit" value="Modificar articulo">
                <input type="file" name="thumb">
                <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'] ?>">
            </form>
            </article>
        </div>


</div>

<?php require 'footer.php'; ?>