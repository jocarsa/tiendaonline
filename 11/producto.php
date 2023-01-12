<?php 
    include "inc/cabecera.php";
?>
    <h3>Página de producto</h3>
    <section>
            <?php
            $bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");
            $peticion = "SELECT * FROM productos WHERE Identificador = ".$_GET['id']."";
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
                           
                        </article>
                        <div id="comprar">
                            <form action="anadeproducto.php" method="POST"> 
                            <h5>Comprar el producto</h5>
                            <h6>Precio:</h6>
                            <p>
                                '.$fila['precio'].'€
                            </p>
                            <input type="hidden" name="precio" value="'.$fila['precio'].'">
                            <h6>Unidades:</h6>
                            <input type="number" name="unidades">
                            <input type="submit" value="Comprar">
                            </form>
                        </div>
                ';
            }
            ?>
        
    </section>
    <aside>
        <h5>Otros productos</h5>
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
    </aside>
<?php 
    include "inc/piedepagina.php";
?>