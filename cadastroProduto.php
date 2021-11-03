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

    <form method="POST" action="salvarProduto.php" enctype="multipart/form-data">

    <h1>Cadastre um produto</h1>

    <label for="nomeProduto">Nome do Produto:</label>
    <input type="text" name="nomeProduto" id="nomeProduto">

    <label for="precoProduto">Preço do Produto:</label>
    <input type="number" name="precoProduto" id="precoProduto">

    <label for="descriProduto">Descrição do Produto:</label>
    <input type="text" name="descriProduto" id="descriProduto">

    <label for="imgProduto">Imagem principal do Produto:</label>
    <input type="file" name="imgProduto" id="imgProduto">

    <label for="img2Produto">Imagem secundária do Produto:</label>
    <input type="file" name="img2Produto" id="img2Produto">

    <label for="qtdProduto">Estoque do Produto:</label>
    <input type="number" name="qtdProduto" id="qtdProduto">

    <label for="tipoProduto">Tipo do Produto:</label>
    <input type="text" name="tipoProduto" id="tipoProduto">

    <input type="submit" id="botao" value="Cadastrar">


    </form>
    
</body>
</html>
