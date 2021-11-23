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
    <form method="POST" action="salvarCategoria.php" enctype="multipart/form-data">

    <h2>Cadastre uma Categoria</h2>

    <label for="nomeCategoria">Nome da Cateogira:</label>
    <input type="text" name="nomeCategoria" id="nomeCategoria">

    <input type="submit" id="botao" value="Cadastrar">


    </form>
<?php include 'footer.php'  ?>      
</body>
</html>
