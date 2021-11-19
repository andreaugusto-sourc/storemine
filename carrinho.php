<?php
session_start();
require_once 'conexao.php';
require_once 'crud/CRUD.php';
$idProduto = $_GET['addCarrinho'];
$conexao = conectar();

$resultado = exibirProduto($conexao, $idProduto);
$produto = mysqli_fetch_assoc($resultado);
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

      if(isset($_GET['addCarrinho'])) {
       $idProd = (int) $_GET['addCarrinho'];
       if (isset($_SESSION['carrinho'][$idProd])) {
           $_SESSION['carrinho'][$idProd]['quantidade']++;

       }else{
           $_SESSION['carrinho'][$idProd] = array('quantidade' => 1, 'nome' => $produto['nomeProduto'], 'preco' => $produto['precoProduto'], 'imagem' => $produto['imagemProduto']);
       }
    }else {
        die("Tu não pode adicionar ao carrinho um produto que não existe!");
    }
    
    if(isset($_GET['excluirTudo'])) {
        session_destroy();
    }
    if (isset($_GET['removerUM'])) {
        $_SESSION['carrinho'][$idProduto]['quantidade']--;
    }else if (isset($_GET['adicionarUM'])) {
        $_SESSION['carrinho'][$idProduto]['quantidade']++;
    }

     ?>
      <a href="carrinho.php?excluirTudo=true">Excluir itens do carrinho</a>
     <section>
     <?php foreach($_SESSION['carrinho'] as $chave => $valor ) { ?>
          
          <div class="item-carrinho">
              <p><?= $valor['nome'] ?> </p>
              <p><img src="images/<?= $valor['imagem'] ?> " class="imagem-item"></p>
              <p>R$ <?= number_format($valor['quantidade'] * $valor['preco'],2,',','.') ?></p>
              <p>Quantidade: <?= $valor['quantidade'] ?> </p>
              <div class="botoes">
            <a href="carrinho.php?deletarUm=<?= $idProduto ?>">-</a>
            <a href="carrinho.php?adicionarUm=<?= $idProduto ?>">+</a>  
        </div>
  
        </div>
      




    <?php  } ?>
     </section>

    </div>

    <?php include 'footer.php' ?>
    
</body>
</html>