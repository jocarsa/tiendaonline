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
                            $total = 0;
                            $bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");
                            foreach ($_SESSION['productosencarro'] as $clave => $valor) {
                                    
                                $peticion = "SELECT * FROM productos WHERE Identificador = ".intval($valor[0]);
                                $resultado = mysqli_query($bd, $peticion);
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    echo '
                                        <tr>
                                            <td>'.$fila['titulo'].'</td>
                                            <td class="derecha">'.$fila['precio'].'</td>
                                            <td class="derecha">'.$valor[1].'</td>
                                            <td class="derecha">'.$valor[1]*$fila['precio'].' €</td>
                                        </tr>
                                    ';
                                    $total += $valor[1]*$fila['precio']*1;
                                }
                            }
                        ?>
                        <tr>
                            <td></td>
                            <td class="derecha"></td>
                            <td class="derecha">Total</td>
                            <td class="derecha"><?php echo $total ?> €</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </footer>
    </body>
</html>