<?php require 'header.php'; ?>

<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"> Nuevo Articulo</h2>
                <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" method="POST">
                <input type="text" name="titulo" placeholder="Titulo del articulo">
                <input type="text" name="extracto" placeholder="Extracto del articulo">
                <textarea name="texto" placeholder="Texto del articulo"></textarea>
                <input type="submit" value="Crear articulo">
                <input type="file" name="thumb">
            </form>
            </article>
        </div>


</div>

<?php require 'footer.php'; ?>