<?php
    session_start();
    $_SESSION['usuario'] = $_REQUEST['nombre'];
    $_SESSION['clave']   = $_REQUEST['clave'];
    if(!empty($_SESSION['usuario']) and !empty($_SESSION['clave'])=='miclave'){
        $_SESSION['pedido'] = array();
        header('Location: carrito.php');
    }else{
        header('Location: inicio.html');
    }
?>