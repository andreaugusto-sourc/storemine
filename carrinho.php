<?php
session_start();
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$_SESSION['carrinho-vazio'] = "Carrinho vazio...";
$frete = 0;
$subtotal = 0;
$total = 0;
?>
    
    <?php include 'header.php' ?>   
    <div class="container">
    <aside id="topo">
    <h2>Meu carrinho</h2>
    <a href="index.php" id="comprarMais">Adicionar mais produtos</a>
    </aside>

     <main id="caixa-carrinho">

     <div id="carrinho">
     <?php if (isset($_SESSION['carrinho'])) { ?>
   
        
         <?php foreach($_SESSION['carrinho'] as $chave => $valor ) { 
             $frete = 12.00;
             $subtotal += $valor['quantidade'] * $valor['preco'];
             $total = $frete + $subtotal;?>
     
          <div class="item-carrinho">
              <p><img src="images/<?= $valor['imagem'] ?> " class="imagem-item"></p>
              <p id="nome-item"><?= $valor['nome'] ?> </p>
              <p>R$ <?= number_format($valor['quantidade'] * $valor['preco'],2,',','.') ?></p>
              <p> <?= $valor['quantidade'] ?> </p>
              <a href="adicionarCarrinho.php?adicionarUM=<?= $valor['id'] ?>">+</a>
              <a href="remover.php?removerUM=<?= $valor['id'] ?>">-</a>
              <a href="deletarCarrinho.php?deletarPROD=<?= $valor['id'] ?>"><ion-icon name="trash"></ion-icon></a>  
      
        </div>
    <?php  }  } if(isset($valor['nome']) == false) {
    echo $_SESSION['carrinho-vazio'];

}

    ?>

    
        
     </div>

     <div id="resumo-pedido"> 
        <h3>Resumo do Pedido</h3>
        <div class="info-carrinho"><p>Subtotal:</p> <p>R$<?= number_format($subtotal,2,',','.') ?></p></div>
        <div class="info-carrinho" id="barra"><p>Frete(Fixo):</p> <p>R$<?= number_format($frete,2,',','.')  ?></p></div>
        <div class="info-carrinho"><p>Total:</p> <p>R$<?= number_format($total,2,',','.')  ?></p></div>
        <a href="finalizarPedido.php" id="continuarCompra">Continuar sua compra</a>
    </div>

</main>
    </div>
 
    <?php include 'footer.php' ?>
    
</body>
</html>