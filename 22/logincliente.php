<?php 
    include "inc/cabecera.php";
?>
<?php
$bd = mysqli_connect("localhost", "tiendaonline", "tiendaonline", "tiendaonline");

$peticion = "
SELECT * FROM clientes
WHERE
usuario = '".$_POST['usuario']."'
AND
contrasena = '".sha1($_POST['contrasena'])."'
LIMIT 1
";
echo $peticion;

$resultado = mysqli_query($bd, $peticion);

if ($fila = mysqli_fetch_assoc($resultado)) {
    header("Location:intranet.php");
}else{
    header("Location:index.php");
}
?>
            
<?php 
    include "inc/piedepagina.php";
?>