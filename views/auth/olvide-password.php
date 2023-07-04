<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" action="/olvide" method="POST" style="margin-left: 38rem;">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>

    <input type="submit" class="boton1" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/login">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear Una</a>
</div>