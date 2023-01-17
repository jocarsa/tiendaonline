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
                    '.$fila['titulo'].'
                </h3>
                <p>
                    '.$fila['descripcion'].'
                </p>
                <img src="img/'.$fila['imagen'].'">
                <p>
                    '.$fila['precio'].'€
                </p>
                <a href="producto.php?id='.$fila['Identificador'].'">
                    <button>Más información</button>
                </a>
            </article>
    ';
}
?>
            
<?php 
    include "inc/piedepagina.php";
?>