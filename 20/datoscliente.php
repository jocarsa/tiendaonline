<?php 
    include "inc/cabecera.php";
?>
    <h3>Datos del cliente</h3>
    <form action="finalizar.php" method="POST" id="datoscliente">
        <label for="usuario">Escoge un nombre de usuario</label>
        <input type="text" name="usuario"> 
        <label for="contrasena">Escoge una contraseña</label>
        <input type="password" name="contrasena">
        <label for="nombre">Indica tu nombre</label>
        <input type="text" name="nombre">
        <label for="apellidos">Indica tus apellidos</label>
        <input type="text" name="apellidos">
        <label for="email">Indica tu email</label>
        <input type="email" name="email">
        <label for="telefono">Indica tu teléfono</label>
        <input type="text" name="telefono">
        <input type="submit" value="Finalizar la compra">
    </form>
<?php 
    include "inc/piedepagina.php";
?>