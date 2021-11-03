<?php
$idProduto = $_GET['id'];
require_once 'conexao.php';
require_once 'produtosCRUD.php';

$conexao = conectar();

$resultado = exibirProduto($conexao,$idProduto);

$produto = mysqli_fetch_assoc($resultado);
?>
<head>
    <link rel="stylesheet" href="css/editar_cadastro.css">
</head>    

<form method="POST" action="atualizarProduto.php" enctype="multipart/form-data">

<h1>Update dos Produtos</h1>

<input type="hidden" value="<?= $produto['idProduto'] ?>" name="idProduto">

<label for="novoNome">Nome do Novo Produto:</label>
<input type="text" value="<?= $produto['nomeProduto'] ?>" name="novoNome" id="novoNome">

<label for="novoPreco">Preço do Novo Produto:</label>
<input type="number" value="<?= $produto['precoProduto'] ?>" name="novoPreco" id="novoPreco">

<label for="novaDescri">Descrição do Novo Produto:</label>
<input type="text" value="<?= $produto['descriProduto'] ?>" name="novaDescri" id="novaDescri">

<label for="novoImg">Imagem principal do Novo Produto:</label>
<input type="file" value="<?= $produto['imgProduto'] ?>" name="novoImg" id="novoImg">

<label for="novoimg2">Imagem secundária do Novo Produto:</label>
<input type="file" value="<?= $produto['img2Produto'] ?>" name="novoimg2" id="novoimg2">

<label for="novaQtd">Estoque do Novo Produto:</label>
<input type="number" value="<?= $produto['qtdProduto'] ?>" name="novaQtd" id="novaQtd">

<label for="novoTipo">Tipo do Novo Produto:</label>
<input type="text" value="<?= $produto['tipoProduto'] ?>" name="novoTipo" id="novoTipo">

<input id="botao" type="submit" value="Atualizar">

</form>
