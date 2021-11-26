<?php
session_start();
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrinho.css">
    <title>Carrinho</title>
</head>
<body>
    <div class="container">
    <?php include 'header.php' ?>   
     <h3>Carrinho</h3>

     <?php

    

     ?>
     <section>
         
     <?php if (isset($_SESSION['carrinho'])) { 
         foreach($_SESSION['carrinho'] as $chave => $valor ) { ?>
          
          <div class="item-carrinho">
              <p><?= $valor['nome'] ?> </p>
              <p><img src="images/<?= $valor['imagem'] ?> " class="imagem-item"></p>
              <p>R$ <?= number_format($valor['quantidade'] * $valor['preco'],2,',','.') ?></p>
              <p>Quantidade: <?= $valor['quantidade'] ?> </p>
              <div class="botoes">
            <a href="remover.php?removerUM=<?= $valor['id'] ?>">-</a>
            <a href="adicionarCarrinho.php?adicionarUM=<?= $valor['id'] ?>">+</a>
            <a href="deletarCarrinho.php?deletarPROD=<?= $valor['id'] ?>">Tirar do carrinho</a>  
        </div>
  
        </div>
      




    <?php  } }else{
        echo "Carrinho ainda vazio...";
    }?>
     </section>

    </div>

    <?php include 'footer.php' ?>
    
</body>
</html>