<?php

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$idProduto = $_GET['id'];

$resultado = exibirProduto($conexao,$idProduto);

$produto = mysqli_fetch_assoc($resultado);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/p.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $produto['nomeProduto'] ?></title>
</head>

<body>
<div class="container">
<?php include 'header.php' ?>    

<section>

<div class=""></div>

</section>


</div>
<?php include 'footer.php'; ?>
    
</body>
</html>