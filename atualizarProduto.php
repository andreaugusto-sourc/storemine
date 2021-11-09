<?php
require_once 'conexao.php';
require_once 'CRUD.php';

$idProduto = $_POST['idProduto'];
$novoNome = $_POST['novoNome'];
$novoPreco = $_POST['novoPreco'];
$novaDescri = $_POST['novaDescri'];
$novaEstoque = $_POST['novoEstoque'];


$conexao = conectar();

$resultado = atualizarProduto($conexao,$idProduto,$novoNome, $novoPreco, $novaDescri,$novoEstoque);

if($resultado) {
    echo "Produto atualizado com sucesso
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Produto não atualizado!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}
?>