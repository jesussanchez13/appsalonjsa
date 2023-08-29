<h1 class="nombre-pagina">Recuperar Pasword</h1>
<p class="descripcion-pagina">Coloca tu nuevo password</p>

<?php include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
 'templates' . DIRECTORY_SEPARATOR . 'alertas.php'; ?>
<?php if($error) return; ?>
<form class=""formulario method="POST">
<div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu password" name="password">
        
    </div>
    
    <input type="submit" class="boton" value="Guardar nuevo formulario" >
</form>