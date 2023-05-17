<?php 
    session_start();
    session_unset();
    unset($_SESSION['nombre']);
    unset($_SESSION['user_id']);
    unset($_SESSION['tipo']);
    unset($_SESSION['carrito']);
    header("Location: ../index.php");
?>