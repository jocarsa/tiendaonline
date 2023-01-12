<?php 
    include "inc/cabecera.php";
?>
<?php
$bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");

$peticion = "SELECT * FROM productos";

$resultado = mysqli_query($bd, $peticion);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo '
        <article>
                <h3>
                    Titulo del producto
                </h3>
                <p>
                    Descripción del producto
                </p>
                <img src="img/zapatilla.jpg">
                <p>
                    20,00€
                </p>
            </article>
    ';
}
?>
            
<?php 
    include "inc/piedepagina.php";
?>