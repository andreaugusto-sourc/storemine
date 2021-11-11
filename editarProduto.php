<?php
$idProduto = $_GET['id'];
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

$resultado = exibirProduto($conexao,$idProduto);

$produto = mysqli_fetch_assoc($resultado);
?>
<head>
    <link rel="stylesheet" href="css/editar_cadastro.css">
</head>    

<form method="POST" action="atualizarProduto.php" enctype="multipart/form-data">

<h2>Update dos Produtos</h2>

<input type="hidden" value="<?= $produto['idProduto'] ?>" name="idProduto">

<label for="novoNome">Nome do Novo Produto:</label>
<input type="text" value="<?= $produto['nomeProduto'] ?>" name="novoNome" id="novoNome">

<label for="novoPreco">Preço do Novo Produto:</label>
<input type="number" value="<?= $produto['precoProduto'] ?>" name="novoPreco" id="novoPreco">

<label for="novaImagem">Imagem principal do Novo Produto:</label>
<input type="file" value="<?= $produto['imagemProduto'] ?>" name="novaImagem" id="novaImagem">

<label for="novaDescri">Descrição do Novo Produto:</label>
<input type="text" value="<?= $produto['descriProduto'] ?>" name="novaDescri" id="novaDescri">

<label for="novoEstoque">Estoque do Novo Produto:</label>
<input type="number" value="<?= $produto['estoqueProduto'] ?>" name="novoEstoque" id="novoEstoque">


<input id="botao" type="submit" value="Atualizar">

</form>
