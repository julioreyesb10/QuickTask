<div class="contenedor reestablecer">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>


    <div class="contenedor-sm">
        <p class="descripcion-pagina">Reestablecer password</p>
        <form class="formulario" method="POST" action="/reestablecer">
            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Nueva Password" name="password" />
            </div>


            <input type="submit" class="boton" value="Establecer nuevo password">

        </form>

        <div class="acciones">
            <a href="/crear">Crear una nueva cuenta</a>
            <a href="/olvide">Olvide mi password</a>
        </div>
    </div>


</div>