<?php 
    include "inc/cabecera.php";
?>
<h3>Producto añadido al carro correctamente</h3>
<p>Redirigiendo en 5 segundos...</p>
<meta http-equiv="Refresh" content="5; url='index.php'" />
<?php
    array_push(
        $_SESSION['productosencarro'], 
        [
            $_POST['producto'],
            $_POST['unidades']
        ])
?>
<?php 
    include "inc/piedepagina.php";
?>