<?php
session_start();
$idProd = $_GET['removerUM'];

if (isset($_GET['removerUM'])) {
        $_SESSION['carrinho'][$idProd]['quantidade']--;
        echo "-1";
    }

if($_SESSION['carrinho'][$idProd]['quantidade'] < 1){
        unset($_SESSION['carrinho'][$idProd]);
    }


    ?>