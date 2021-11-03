<?php
require_once 'conexao.php';
require_once 'produtosCRUD.php';

$idProduto = $_POST['idProduto'];
$novoNome = $_POST['novoNome'];
$novoPreco = $_POST['novoPreco'];
$novaDescri = $_POST['novaDescri'];
$novoImg = $_FILES['novoImg'];
$novoImg2 = $_FILES['novoimg2'];
$novaQtd = $_POST['novaQtd'];
$novoTipo = $_POST['novoTipo'];

$conexao = conectar();

$resultado = atualizarProduto($conexao,$idProduto,$novoNome, $novoPreco, $novaDescri,$novoImg,$novoImg2,$novaQtd,$novoTipo);

if($resultado) {
    echo "Produto atualizado com sucesso
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Produto não atualizado!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}
?>