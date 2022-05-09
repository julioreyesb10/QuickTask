<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>


    <div class="contenedor-sm">
        <p class="descripcion-pagina">Inicia sesion</p>
        <form class="formulario" method="POST" action="/">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email" />
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password" />
            </div>
            <input type="submit" class="boton" value="Iniciar Sesion">

        </form>

        <div class="acciones">
            <a href="/crear">Crear una nueva cuenta</a>
            <a href="/olvide">Olvide mi password</a>
        </div>
    </div>


</div>