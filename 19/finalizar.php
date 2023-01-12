<?php 
    include "inc/cabecera.php";
?>
    <h3>Finalización de la compra</h3>
    <p>Muchas gracias por tu compra</p>
    <?php
        $bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");
        // Meto un cliente nuevo
        $peticion = "
            INSERT INTO clientes
            VALUES (
                NULL,
                '".$_POST['usuario']."',
                '".$_POST['contrasena']."',
                '".$_POST['nombre']."',
                '".$_POST['apellidos']."',
                '".$_POST['email']."',
                '".$_POST['telefono']."'
            )
        ";
        mysqli_query($bd, $peticion);
        // Quiero averiguar el id del cliente recien metido
        $peticion = "
        SELECT * 
        FROM clientes 
        ORDER BY Identificador DESC 
        LIMIT 1
        ";
        $resultado = mysqli_query($bd, $peticion);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $idcliente = $fila['Identificador'];
        }
        // Meto un nuevo pedido
        $peticion = "
            INSERT INTO pedidos
            VALUES (
                NULL,
                '".$idcliente."',
                '".date('U')."',
                '1'
            )
        ";
        mysqli_query($bd, $peticion);
        // Quiero averiguar el ID del pedido recien metido
        $peticion = "
        SELECT * 
        FROM pedidos 
        ORDER BY Identificador DESC 
        LIMIT 1
        ";
        $resultado = mysqli_query($bd, $peticion);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $idpedido = $fila['Identificador'];
        }
        mysqli_query($bd, $peticion);
        // Para cada una de las lineas de pedido, quiero meterlas en la tabla de lineas de pedido
        foreach ($_SESSION['productosencarro'] as $clave => $valor) {
            $peticion = "
            INSERT INTO lineaspedido
            VALUES (
                NULL,
                '".$idpedido."',
                '".$valor[0]."',
                '".$valor[1]."'
            )
        ";
        mysqli_query($bd, $peticion);
        }
        ?>
<?php 
    include "inc/piedepagina.php";
?>