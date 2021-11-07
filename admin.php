<?php

require_once 'conexao.php';
require_once 'produtosCRUD.php';

$conexao = conectar();
$resultado = exibirProdutos($conexao);

?>
<head>
  <link rel="stylesheet" href="css/admin.css">
</head>  

<body>
<?php include 'header_simples.php' ?>    
<section>

<div id="aba">
    <h3>Alterar</h3>

    <a class="item-aba" href="cadastroProduto.php">Novo Produto</a>

    <a class="item-aba">Todos produtos</a>

    <h3>Relatórios</h3>

    <img src="images/whiter2.png" id="aba-img">
</div>

<div id="dashboard">

<h1>Inventário de Produtos:</h1>

<article>Imagem <a id="espaco">Nome</a> Estoque Preço</article>

<?php while ($linha = mysqli_fetch_assoc($resultado)): ?>  
      
  <div class="linha">
     <a class="item-linha" href="detalhesProduto.php?id=<?= $linha['idProduto']?>"><img src="images/<?= $linha['imgProduto'] ?>" class="img-linha"> </a>
     <a class="item-linha"><?= $linha['nomeProduto'] ?></a>
     <a class="item-linha"><?= $linha['qtdProduto'] ?> </a>
     <a class="item-linha">R$ <?= number_format($linha["precoProduto"], 2, ',', '.' ) ?> </a>
     <a class="item-linha" href="editarProduto.php?id=<?= $linha['idProduto']?>">Editar</a>
     <a class="item-linha" href="deletarProduto.php?id=<?= $linha['idProduto']?>">Deletar</a>
  </div>
   
<?php endwhile ?> 

</div>


</section>
<?php include 'footer.php' ?>    


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>