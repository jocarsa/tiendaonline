<?php 
    include "inc/cabecera.php";
?>
<h3>Intranet de cliente</h3>
<?php
    echo "Hola, ".$_SESSION['nombre']." ".$_SESSION['apellidos']
?>
<br>
<h4>Listado de pedidos</h4> 
<br>
<table>
    <tr>
        <th>Fecha</th>
        <th>Numero de pedido</th>
        <th>Cliente</th>
        <th>Total</th>
        <th>Estado</th>
    </tr>
    <?php
    $peticion = "
        SELECT * FROM pedidos 
        LEFT JOIN estadopedido 
        ON pedidos.FK_estadopedido_estado = estadopedido.Identificador
        WHERE FK_clientes_nombre = ".$_SESSION['idusuario'];
    $resultado = mysqli_query($bd, $peticion);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        
        $peticion2 = "
        SELECT 
        SUM(productos.precio*lineaspedido.cantidad) 
        AS total
        FROM pedidos
        LEFT JOIN lineaspedido
        ON pedidos.Identificador = lineaspedido.FK_pedidos_numeropedido
        LEFT JOIN productos
        ON lineaspedido.FK_productos_titulo = productos.Identificador
        WHERE pedidos.numeropedido = ".$fila['numeropedido'];
        $resultado2 = mysqli_query($bd, $peticion2);
        while ($fila2 = mysqli_fetch_assoc($resultado2)) {
            $total = $fila2['total'];
        }
        echo '
            <tr>
                <td>'.gmdate('r', $fila['fecha']).'</td>
                <td>'.$fila['numeropedido'].'</td>
                <td>'.$_SESSION['nombre']." ".$_SESSION['apellidos'].'</td>
                <td>'.$total.'</td>
                <td>
                    <div class="estado '.$fila['estado'].'">    
                        '.$fila['estado'].'
                    </div>
                </td>
            </tr>

        ';
    }
    ?>
</table>
<?php 
    include "inc/piedepagina.php";
?>