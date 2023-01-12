       <div class="clearfix"></div> 
        </main>
        <footer>
            
            <section id="carro">
                <h4>Tu pedido:</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Unidades</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");
                            foreach ($_SESSION['productosencarro'] as $clave => $valor) {
                                    
                                $peticion = "SELECT * FROM productos WHERE Identificador = ".intval($valor[0]);
                                $resultado = mysqli_query($bd, $peticion);
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    echo '
                                        <tr>
                                            <th>'.$fila['titulo'].'</th>
                                            <th class="derecha">'.$fila['precio'].'</th>
                                            <th class="derecha">'.$valor[1].'</th>
                                            <th class="derecha">'.$valor[1]*$fila['precio'].'</th>
                                        </tr>
                                    ';
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </section>
        </footer>
    </body>
</html>