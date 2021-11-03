<?php
require_once 'conexao.php';
require_once 'produtosCRUD.php';
$idProduto = $_GET['id'];

$conexao = conectar();

$resultado = deletarProduto($conexao,$idProduto);

if ($resultado ){
    echo "Produto deletado com sucesso!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Produto não deletado!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

