<?php

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$idProduto = $_GET['id'];

$resultado = exibirProduto($conexao,$idProduto);
$produto = mysqli_fetch_assoc($resultado);

$idCategoria = $produto['idCategoria'];
$resultado2 = exibirCategoria($conexao,$idCategoria);
$categoria = mysqli_fetch_assoc($resultado2);

$resultado3 = imagemSecundaria($conexao,$idProduto);
$imagem = mysqli_fetch_assoc($resultado3);
require_once 'tabelaParcelas.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="images/m.webp">
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $produto['nomeProduto'] ?></title>
</head>

<body>
<div class="container">
<?php include 'header.php' ?>    

<main>

<div id="imagens-produto">

<img src="images/<?= $produto['imagemProduto']?>" id="imagem-principal">

<article>
    <img src="images/<?= $produto['imagemProduto']?>" class="imagens-secundarias">
  
    <img src="images/<?= $imagem['imagemSecundaria']?>" class="imagens-secundarias">

    
</article>
</div>


<div id="info-produto">

    <p><?= $produto['estoqueProduto']?> unidades vendidas</p>
    <div id="titulo"><?= $produto['nomeProduto'];?></div>



<div id="bloco-pagamento">
    
    <div id="preco">R$ <?= number_format($produto['precoProduto'],2,',','.')?></div>
    <div id="parcelas">Em até <?= $parcelas ?>X de R$ <?= number_format($produto['precoProduto']/$parcelas,2,',','.') ?> </div>
    <div id="formas-pagamento"><a id="formas-href" href="">Ver as formas de pagamento</a></div>

</div>


<div id="bloco-frete">



    <div id="estrutura">
        <h3>Calcule seu frete</h3>
        <label for="cep">Digite seu CEP:</label>
        <input type="number" id="enter" name="numero-cep">

    </div>



    <img src="images/aldeao.png" id="imagem-decorativa">


</div>

<div id="res"></div>


    <select>
        <option>1 unidade</option>
      <?php
      for ($i = 2; $i <= 8; $i++) {
          echo "<option>" . $i .  " unidades". "</option>";
      }

      ?>
      <option>Mais de 8 unidades</option>
    </select>

    <?php if($categoria['nomeCategoria'] == "Roupa") { ?>

        <select>
            <option>PP</option>
            <option>P</option>
            <option>M</option>
            <option>G</option>
            <option>GXG</option>

        </select>

    
<?php } ?>

    





<button type="submit" class="botao" id="botao-compra">Compra</button>
<button type="submit" class="botao" id="botao-carrinho"><a href="adicionarCarrinho.php?addCarrinho=<?= $idProduto ?>">Adicionar ao Carrinho</a></button>


<aside>

    <ion-icon name="bag-check"></ion-icon>
    <a>Compra garantida.</a> Produto não
    recebido = Reembolso na hora!


</aside>

<aside>

    <ion-icon name="return-down-back"></ion-icon>
    <a>Devolução grátis.</a> Você tem 7
    dias a partir da entrega.
</aside>

<aside>

    <ion-icon name="star"></ion-icon>
    <a>Avaliação Média dos usuários:</a>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-sharp"></ion-icon>
    <ion-icon name="star-half-sharp"></ion-icon>


</aside>

    </main>

    </div>
    
<script src="js/frete.js"></script>
<?php include 'footer.php'; ?>
    
</body>
</html>