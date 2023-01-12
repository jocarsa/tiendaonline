<?php 
    session_start();
    if(!isset($_SESSION['productosencarro'])){
        $_SESSION['productosencarro'] = [];
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
        </header>
        <main>