<?php 
    include "inc/cabecera.php";
?>
    <h3>Datos del cliente</h3>
    <div id="izquierda">
        <h4>¿Todavía no eres cliente?</h4>
        <p>Introduce tus datos</p>
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
    </div>
    <div id="derecha">
        <h4>¿Ya eres cliente?</h4>
        <p>Introduce tus datos</p>
        <form action="finalizarcliente.php" method="POST" id="datoscliente">
            <label for="usuario">Introduce tu nombre de usuario</label>
            <input type="text" name="usuario"> 
            <label for="contrasena">Introduce tu contraseña</label>
            <input type="password" name="contrasena">
            
            <input type="submit" value="Finalizar la compra">
        </form>
    </div>
<?php 
    include "inc/piedepagina.php";
?>