<?php 
    session_start();
    if(!isset($_SESSION['productosencarro'])){
        $_SESSION['productosencarro'] = [];
    }
?>
<?php
    foreach($_REQUEST as $variable=>$valor){ 
        if(preg_match_all('/\b(SELECT|INSERT|DELETE|UPDATE|DROP|ORDER|HAVING|<scri)\b/i',$valor)){
            die("Intento de ataque");
        }
        if(preg_match_all('/\b(SELECT|INSERT|DELETE|UPDATE|;|DROP|ORDER|HAVING)\b/i',$variable)){
            die("Intento de ataque");
        }
    }
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Tienda online</title>
        <meta charset="utf-8">
        <link rel="Stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <h1>Tienda online</h1>
            <h2>Zapatillas</h2>
            <form id="logincliente" action="logincliente.php" method="POST">
                <input type="text" name="usuario" placeholder="usuario">
                <input type="password" name="contrasena" placeholder="contraseña">
                <input type="submit">
            </form>
              <div class="clearfix"></div>
        </header>
        <main>