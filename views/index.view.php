<?php require 'header.php'; ?>

<div class="contenedor">
    <?php foreach ($posts as $post) : ?>
        <div class="post">
            <article>
                <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
                        <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                        <div class="thumb">
                            <a href="single.php?id=<?php echo $post['id']; ?>"><img src="<?php echo RUTA . "imagenes/" . $post['thumb'] ?>" alt="1" /></a>
                        </div>
                        <p class="extracto"><?php echo $post['extracto']; ?></p>
                        <a href="single.php?id=<?php echo $post['id']; ?>">Continuar leyendo</a>
            </article>
        </div>
    <?php endforeach; ?>



    <?php require 'paginacion.php'; ?>

</div>
<?php require 'views/footer.php'?>