<?php 
    include "inc/cabecera.php";
?>

<h3>Inicia sesión</h3>
<p>Si ya eres cliente, puedes iniciar sesión aquí</p>
<form id="login" action="logincliente.php" method="POST">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="password" name="contrasena" placeholder="contraseña">
    <input type="submit">
</form>   
<?php 
    include "inc/piedepagina.php";
?>