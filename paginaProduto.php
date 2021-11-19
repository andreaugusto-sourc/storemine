<?php

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$idProduto = $_GET['id'];

$resultado = exibirProduto($conexao,$idProduto);

$produto = mysqli_fetch_assoc($resultado);
require_once 'tabelaParcelas.php';
$categoria;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="images/m.webp">
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
<div id="imagens-produto">

<img src="images/<?= $produto['imagemProduto']?>" id="imagem-principal">

<article>
    <img src="images/<?= $produto['imagemProduto']?>" class="imagens-secundarias">
    <img src="images/<?= $produto['imagemProduto']?>" class="imagens-secundarias">
</article>
</div>


<div id="info-produto">

<article >

    <p><?= $produto['estoqueProduto']?> unidades vendidas</p>
    <div id="titulo"><?= $produto['nomeProduto'];?></div>

</article>

<div id="bloco-pagamento">
    
    <div id="preco">R$ <?= number_format($produto['precoProduto'],2,',','.')?></div>
    <div id="parcelas">Em até <?= $parcelas ?>X de R$ <?= number_format($produto['precoProduto']/$parcelas,2,',','.') ?> </div>
    <div id="formas-pagamento"><a id="formas-href" href="">Ver as formas de pagamento</a></div>

</div>


<div id="bloco-frete">



    <div id="estrutura">
        <h2>Calcule seu frete</h2>
        <label for="cep">Digite seu CEP:</label>
        <input type="number" id="enter" name="cep-number">

    </div>



    <img src="images/aldeao.png" id="imagem-decorativa">


</div>

<div id="res"></div>


    <select>
        <option>1 unidade</option>
      <?php
      for ($i = 2; $i <= 16; $i++) {
          echo "<option>" . $i .  " unidades". "</option>";
      }

      ?>
      <option>Mais de 16 unidades</option>
    </select>






<button type="submit" class="botao" id="botao-compra">Compra</button>
<button type="submit" class="botao" id="botao-carrinho"><a href="carrinho.php?addCarrinho=<?= $idProduto ?>">Adicionar ao Carrinho</a></button>


<article class="selo">

    <ion-icon name="bag-check"></ion-icon>
    <a>Compra garantida.</a> Produto não
    recebido = Reembolso na hora!


</article>

<article class="selo">

    <ion-icon name="return-down-back"></ion-icon>
    <a>Devolução grátis.</a> Você tem 7
    dias a partir da entrega.
</article>

<article class="selo">

    <ion-icon name="star"></ion-icon>
    <a>Avaliação Média dos usuários:</a>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-half-sharp"></ion-icon>


</article>



</section>


</div>
<?php include 'footer.php'; ?>
    
</body>
</html>