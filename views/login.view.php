<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Iniciar sesion</h2>
           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" method="POST">
        <input type="text" placeholder="Usuario" name="usuario">
        <input type="password" placeholder="Contraseña" name="password">
    <input type="submit" value="Iniciar sesion"></form>
        </article>
    </div>
</div>
<?php require 'footer.php'?>