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

<label for="novaQtd">Estoque do Novo Produto:</label>
<input type="number" value="<?= $produto['estoqueProduto'] ?>" name="novoEstoque" id="novoEstoque">


<input id="botao" type="submit" value="Atualizar">

</form>
