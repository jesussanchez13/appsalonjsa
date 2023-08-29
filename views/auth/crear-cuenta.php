<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">LLena el formulario para crear una cuenta</p>


<?php include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
 'templates' . DIRECTORY_SEPARATOR . 'alertas.php'; ?>






<form class=""formulario method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" placeholder="Tu Nombre" name="nombre" value="<?php echo s($usuario->nombre); ?>">
        
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="apellido" id="apellido" placeholder="Tu apellido" name="apellido"value="<?php echo s($usuario->apellido); ?>">
    </div>
  
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="telefono" id="telefono" placeholder="Tu Teléfono" name="telefono"value="<?php echo s($usuario->telefono); ?>">
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email"value="<?php echo s($usuario->email); ?>">
        
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu password" name="password">
    </div>
  
    <input type="submit" class="boton" value="Crear Cuenta" >
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesion</a>
    

</div>