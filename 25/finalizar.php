<?php 
    include "inc/cabecera.php";
?>
    <h3>Finalización de la compra</h3>
    <p>Muchas gracias por tu compra</p>
    <?php
        // Meto un cliente nuevo
        $peticion = "
            INSERT INTO clientes
            VALUES (
                NULL,
                '".$_POST['usuario']."',
                '".sha1($_POST['contrasena'])."',
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
            
        // Quito cantidad en el stock
            $peticion = "
            SELECT * FROM productos WHERE Identificador = ".$valor[0];
            $resultado = mysqli_query($bd, $peticion);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $stockanterior = $fila['stock'];
            }
            $nuevostock = $stockanterior - $valor[1];
            $peticion = "
            UPDATE productos SET stock = ".$nuevostock." 
            WHERE Identificador = ".$valor[0];
            echo $peticion;
            mysqli_query($bd, $peticion);
        }
        $_SESSION['productosencarro'] = [];
        mail(
            "info@josevicentecarratala.com",
            "Nuevo pedido en la tienda online",
            "Tienes un nuevo pedido"
        );
        ?>
<?php 
    include "inc/piedepagina.php";
?>