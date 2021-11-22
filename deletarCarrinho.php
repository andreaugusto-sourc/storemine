<?php
session_start();
$idProd = $_GET['deletarPROD'];

if(isset($_GET['deletarPROD'])) {
    unset($_SESSION['carrinho'][$idProd]);
    echo "Produto deletado" . $_SESSION['carrinho'][$idProd]['nome'];
    sort($_SESSION['carrinho']);
}

?>