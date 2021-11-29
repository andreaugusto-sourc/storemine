<?php

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$idCategoria = $_GET['id'];

$resultado = exibirCategoria($conexao,$idCategoria);

$categoria = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/editar_cadastro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de editar</title>
</head>
<body>
<?php include 'header_simples.php' ?>
<form method="POST" action="atualizarCategoria.php" enctype="multipart/form-data">

<h2>Edite a categoria</h2>

<input type="hidden" value="<?= $categoria['idCategoria']?>" name="idCategoria">

<label for="novoNome">Novo nome da Categoria:</label>
<input type="text" name="novoNome" id="novoNome" value="<?= $categoria['nomeCategoria'] ?>">

<label for="novaImagem">Nova imagem da Categoria</label>
<input type="file" name="novaImagem" id="novaImagem" value="<?= $categoria['imagemCategoria']?>">

<label for="novaDescri">Nova descrição da Categoria</label>
<input type="text" name="novaDescri" id="novaDescri" value="<?= $categoria['descriCategoria']?>">

<input type="submit" id="botao" value="Atualizar">

</form>
<?php include 'footer.php' ?>    
</body>
</html>