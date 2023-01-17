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
    </tr>
    <?php
    $bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");
    $peticion = "
        SELECT * FROM pedidos 
        WHERE FK_clientes_nombre = ".$_SESSION['idusuario'];
    $resultado = mysqli_query($bd, $peticion);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '
            <tr>
                <td>'.gmdate('r', $fila['fecha']).'</td>
                <td>'.$fila['numeropedido'].'</td>
                <td>'.$_SESSION['nombre']." ".$_SESSION['apellidos'].'</td>
                <td></td>
            </tr>

        ';
    }
    ?>
</table>
<?php 
    include "inc/piedepagina.php";
?>