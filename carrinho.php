<?php
session_start();
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

$frete = 0;
$subtotal = 0;
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="images/m.webp">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrinho.css">
    <title>Carrinho</title>
</head>
<body>
    <div class="container">
    <?php include 'header.php' ?>   

    
     <main id="caixa-carrinho">
     <div id="carrinho">
    
     <?php if (isset($_SESSION['carrinho'])) { ?>
        <div id="topo">
         <h2>Meu carrinho</h2>
         <a href="index.php" id="comprarMais">Adicionar mais produtos</a>
     </div>
        <article> <a>Produtos</a> <a id="espaco">Nome Valor Quantidade Funções </a> </article>
         <?php foreach($_SESSION['carrinho'] as $chave => $valor ) { 
             $frete = 20.00;
             $subtotal += $valor['quantidade'] * $valor['preco'];
             $total = $frete + $subtotal;?>
     
          <div class="item-carrinho">
              <p><img src="images/<?= $valor['imagem'] ?> " class="imagem-item"></p>
              <p><?= $valor['nome'] ?> </p>
              <p>R$ <?= number_format($valor['quantidade'] * $valor['preco'],2,',','.') ?></p>
              <p>Quantidade: <?= $valor['quantidade'] ?> </p>
              <a href="adicionarCarrinho.php?adicionarUM=<?= $valor['id'] ?>">+</a>
              <a href="remover.php?removerUM=<?= $valor['id'] ?>">-</a>
              <a href="deletarCarrinho.php?deletarPROD=<?= $valor['id'] ?>"><ion-icon name="trash"></ion-icon></a>  
      
        </div>
    <?php  }  }else{
        echo "Carrinho ainda vazio...";
    }

    ?>

    
        
     </div>

     <div id="resumo-pedido"> 
        <h3>Resumo do Pedido</h3>
        <div class="info-carrinho"><p>Subtotal:</p> <p>R$<?= number_format($subtotal,2,',','.') ?></p></div>
        <div class="info-carrinho" id="barra"><p>Frete:</p> <p>R$<?= number_format($frete,2,',','.')  ?></p></div>
        <div class="info-carrinho"><p>Total:</p> <p>R$<?= number_format($total,2,',','.')  ?></p></div>
        <a href="finalizar.php" id="continuarCompra">Continuar sua compra</a>
    </div>

</main>
    </div>
 
    <?php include 'footer.php' ?>
    
</body>
</html>