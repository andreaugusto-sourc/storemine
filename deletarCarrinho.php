<?php
session_start();
$idProd = $_GET['deletarPROD'];

if(isset($_GET['deletarPROD'])) {
    echo "Produto deletado";
    unset($_SESSION['carrinho'][$idProd]);
    sort($_SESSION['carrinho']);
}

?>