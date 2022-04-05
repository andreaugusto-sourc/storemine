<?php
session_start();
$idProd = $_GET['removerUM'];

if (isset($_GET['removerUM'])) {
        $_SESSION['carrinho'][$idProd]['quantidade']--;
        header("Location: http://localhost/storemine/carrinho.php");
    }

if($_SESSION['carrinho'][$idProd]['quantidade'] < 1){
        unset($_SESSION['carrinho'][$idProd]);
        header("Location: http://localhost/storemine/carrinho.php");
    }


    ?>
