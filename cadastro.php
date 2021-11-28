<?php

require_once 'conexao.php';
require_once 'crud/CRUD.php';
$conexao = conectar();
$resultado = exibirCategorias($conexao);

$resultado2 = exibirImagens($conexao);

$resultado3 = exibirProdutos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/editar_cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
</head>
<body>
    
<?php include 'header_simples.php' ?>

<?php if ($_GET['modo'] == "produtos") { ?>
    <form method="POST" action="salvarProduto.php" enctype="multipart/form-data">

    <h2>Cadastre um produto</h2>

    <label for="nomeProduto">Nome do Produto:</label>
    <input type="text" name="nomeProduto" id="nomeProduto">

    <label for="precoProduto">Preço do Produto:</label>
    <input type="number" name="precoProduto" id="precoProduto">

    <label for="imagemProduto">Imagem principal do Produto:</label>
    <input type="file" name="imagemProduto" id="imagemProduto">

    <label for="descriProduto">Descrição do Produto:</label>
    <input type="text" name="descriProduto" id="descriProduto">

    <label for="idCategoria"> Categoria do Produto:</label>
    <select name="idCategoria" id="idCategoria">
        <?php while($categoria = mysqli_fetch_assoc($resultado)) {
          echo "<option>". $categoria['nomeCategoria'] . " - " . $categoria["idCategoria"] . "</option>";
        } ?>
    </select>

    <label for="qtdProduto">Estoque do Produto:</label>
    <input type="number" name="estoqueProduto" id="estoqueProduto">

    <input type="submit" id="botao" value="Cadastrar">


    </form>

<?php } else if ($_GET['modo'] == "categorias") { ?>

<form method="POST" action="salvarCategoria.php" enctype="multipart/form-data">

<h2>Cadastre uma Categoria</h2>

<label for="nomeCategoria">Nome da Categoria:</label>
<input type="text" name="nomeCategoria" id="nomeCategoria">

<label for="imagemCategoria">Imagem da Categoria:</label>
<input type="file" name="imagemCategoria" id="imagemCategoria">

<label for="descriCategoria">Descrição da Categoria:</label>
<input type="text" name="descriCategoria" id="descriCategoria">

<input type="submit" id="botao" value="Cadastrar">


</form>

<?php }else if ($_GET['modo'] == "imagens") { ?>

<form method="POST" action="salvarImagem.php" enctype="multipart/form-data">

<h2>Adicione imagens secundárias para os produtos</h2>

<label for="imagemSecundaria">Imagem secundária:</label>
<input type="file" name="imagemSecundaria" id="imagemSecundaria">


<select name="idProduto" id="idProduto">
    <?php while($produto = mysqli_fetch_assoc($resultado3)) {
        echo "<option>" . $produto['idProduto'] . " - " . $produto['nomeProduto'] . "</option>";
    } ?>
</select>

<input type="submit" id="botao" value="Adicionar">


</form>

<?php } ?>


<?php include 'footer.php';  ?>      
</body>

