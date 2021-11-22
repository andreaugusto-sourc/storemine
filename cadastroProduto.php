<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/editar_cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <?php include 'header_simples.php' ?>
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

    <label for="qtdProduto">Estoque do Produto:</label>
    <input type="number" name="estoqueProduto" id="estoqueProduto">

    <input type="submit" id="botao" value="Cadastrar">


    </form>
    <?php include 'footer.php' ?>
</body>
</html>
