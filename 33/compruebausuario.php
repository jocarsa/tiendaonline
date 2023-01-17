<?php

    include "inc/conexion.php";
    
    $peticion = "
        SELECT * FROM clientes 
        WHERE 
        usuario = '".$_GET['usuario']."'
        ";

    $resultado = mysqli_query($bd, $peticion);

    if ($fila = mysqli_fetch_assoc($resultado)) {
        echo "ko";
    }else{
        echo "ok";
    }

?>