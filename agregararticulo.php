<?php
    session_start();
    $articulo = $_POST['articulo'];
    $cantidad = $_POST['cantidad'];
    $precio   = $_POST['precio'];
    $cadena = $articulo.','.$cantidad.','.$precio;
    $_SESSION['pedido'][]= $cadena;
    header('Location: carrito.php');
?>