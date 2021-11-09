<?php

require_once 'conexao.php';
require_once 'CRUD.php';

$conexao = conectar();

$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"]/100;
$descriProduto = $_POST["descriProduto"];
$estoqueProduto = $_POST["estoqueProduto"];

$resultado =  adicionarProduto($conexao,$nomeProduto,$precoProduto,$descriProduto,$estoqueProduto);

if ($resultado) {
    echo "A inserção foi feita!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Erro na inserção!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

?>