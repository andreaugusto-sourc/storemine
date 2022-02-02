<?php
$idProduto = $_GET['id'];
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

$resultado = exibirProduto($conexao,$idProduto);
$resultado2 = exibirCategorias($conexao);

$produto = mysqli_fetch_assoc($resultado);
?>
  
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/editar_cadastro.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php include 'header_simples.php' ?>
<form method="POST" action="atualizarProduto.php" enctype="multipart/form-data">

<h2>Update dos Produtos</h2>

<input type="hidden" value="<?= $produto['idProduto'] ?>" name="idProduto">

<label for="novoNome">Novo nome do Produto:</label>
<input type="text" value="<?= $produto['nomeProduto'] ?>" name="novoNome" id="novoNome">

<label for="novoPreco">Novo preço do Produto:</label>
<input type="number" value="<?= $produto['precoProduto'] ?>" name="novoPreco" id="novoPreco">

<label for="novaImagem">Nova imagem principal do Produto:</label>
<input type="file" value="<?= $produto['imagemProduto'] ?>" name="novaImagem" id="novaImagem">

<label for="novaDescri">Novo descrição do Produto:</label>
<input type="text" value="<?= $produto['descriProduto'] ?>" name="novaDescri" id="novaDescri">

<label for="novaCate">Nova Categoria</label>
<select value="<?= $produto['idCategoria']?>" name="novaCate" id="novaCate">
        <?php while($categoria = mysqli_fetch_assoc($resultado2)) {
          echo "<option>". $categoria['nomeCategoria'] . " - " . $categoria["idCategoria"] . "</option>";
        } ?>
</select>

<label for="novoEstoque">Novo estoque do Produto:</label>
<input type="number" value="<?= $produto['estoqueProduto'] ?>" name="novoEstoque" id="novoEstoque">


<input id="botao" type="submit" value="Atualizar">

</form>
<?php include 'footer.php' ?>
  
</body>
</html>