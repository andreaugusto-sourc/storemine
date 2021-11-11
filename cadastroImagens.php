<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/editar_cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Imagens</title>
</head>
<body>
    

    <form method="POST" action="salvarImagem.php" enctype="multipart/form-data">

    <h2>Adicione imagens secundárias para os produtos</h2>

    <label for="arquivoImagem">Imagem secundária:</label>
    <input type="file" name="arquivoImagem" id="arquivoImagem">

    <input type="submit" id="botao" value="Adicionar">


    </form>
    
</body>
</html>
