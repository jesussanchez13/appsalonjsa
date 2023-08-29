<h1 class="nombre-pagina">Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuacion</p>

<?php include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
 'templates' . DIRECTORY_SEPARATOR . 'alertas.php'; ?>

<form class=""formulario method="POST" action="/olvide">
<div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
        
    </div>
    
    <input type="submit" class="boton" value="Enviar instruciones" >
</form>

<div class="acciones">
    <a href="/">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crear una </a>

</div>

