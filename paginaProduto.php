<?php

require_once 'conexao.php';
require_once 'CRUD.php';

$conexao = conectar();
$idProduto = $_GET['id'];

$resultado = exibirProduto($conexao,$idProduto);

$produto = mysqli_fetch_assoc($resultado);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/pagina.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $produto['nomeProduto'] ?></title>
</head>

<body>
    <div class="container">
<?php include 'header.php' ?>    
<section id="caixa-produto">

<div id="produto-imagens">
    <img src="images/<?= $produto['imgProduto'] ?>" id="principal-img" >

    <div id="secundarias">
    <img src="images/<?= $produto['imgProduto'] ?>" class="secundarias-img" >
    <img src="images/<?= $produto['img2Produto'] ?>" class="secundarias-img" >
    </div>
  
</div>



<div id="produto-info">

<p> <?= $produto['qtdProduto'];?> unidades restantes</p>

<p> <?= $produto ['nomeProduto']?></p>

<div>
    <p><h2><?= $produto['precoProduto']?></h2></p>
    <p>
        <?php if($produto['precoProduto'] < 60) {
            echo "Até em 2X R$ " . round($produto['precoProduto']/2,2);
        }elseif ($produto['precoProduto'] < 90){
            echo "Até em 3X R$ " . round($produto['precoProduto']/3,2);
        }elseif ($produto['precoProduto'] < 120) {
            echo "Até em 4X R$ " . round($produto['precoProduto']/4,2);
            
        }elseif ($produto['precoProduto'] < 150) {
            echo "Até em 5X R$ " . round($produto['precoProduto']/5,2);
            
        }elseif ($produto['precoProduto'] < 180) {
            echo "Até em 6X R$ " . round($produto['precoProduto']/6,2);
            
        }else {
            echo "Até em 8X R$ " . round($produto['precoProduto']/8,2);
        } ?>
</p>
</div>



</div>


</section>


</div>


<?php include 'footer.php'; ?>
    
</body>
</html>