<?php

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

if (isset($_GET['modo'])) {
  if ($_GET['modo'] == "produtos") {
    $modo = "produtos";
    $resultado = exibirProdutos($conexao);
  
  }else if($_GET['modo'] == "categorias") {
    $modo = "categorias";
    $resultado = exibirCategorias($conexao);

  }else if($_GET['modo'] == "imagens") {
    $modo = "imagens";
    $resultado = exibirImagens($conexao);

  }
}else {
  $modo = "";
}


?>
<head>
  <link rel="stylesheet" href="css/admin.css">
</head>  

<body>

<?php include 'header_simples.php'; ?>
<section>

<div id="aba">
    <h2>Alterações</h2>

    <a href="cadastro.php?modo=produtos" class="item-aba">Novo Produto</a>

    <a class="item-aba" href="admin.php?modo=produtos">Todos produtos</a>

    <a href="cadastro.php?modo=categorias" class="item-aba">Nova Categoria</a>

    <a class="item-aba" href="admin.php?modo=categorias">Todas as categorias</a>

    <a href="cadastro.php?modo=imagens" class="item-aba">Nova imagem </a>

    <a class="item-aba" href="admin.php?modo=imagens">Todas as imagens </a>



    <img src="images/whiter2.png" id="aba-img">

</div>

<div id="dashboard">

<?php if ($modo == "produtos") { ?>
<h1>Inventário de Produtos:</h1>

<?php while ($linha = mysqli_fetch_assoc($resultado)): ?>  
      
  <div class="linha">
     <a class="item-linha" href="detalhesProduto.php?id=<?= $linha['idProduto']?>"><img src="images/<?= $linha['imagemProduto'] ?>" class="img-linha"> </a>
     <a class="item-linha"><?= $linha['nomeProduto'] ?></a>
     <a class="item-linha"><?= $linha['estoqueProduto'] ?> </a>
     <a class="item-linha">R$ <?= number_format($linha["precoProduto"], 2, ',', '.' ) ?> </a>
     <a class="item-linha" href="editarProduto.php?id=<?= $linha['idProduto']?>">Editar</a>
     <a class="item-linha" href="deletar.php?id=<?= $linha['idProduto']?>&modo=produtos">Deletar</a>
  </div>
   
<?php endwhile ?> 

</div>
<?php }else if ($modo == 'categorias') { ?>
<h1>Inventário de categorias:</h1>

<?php while ($linha = mysqli_fetch_assoc($resultado)): ?>  
      
  <div class="linha">
     <a class="item-linha" href="detalhesCategoria.php?id=<?= $linha['idCategoria']?>"><img src="images/<?= $linha['imagemCategoria'] ?>" class="img-linha"> </a>
     <a class="item-linha"><?= $linha['nomeCategoria'] ?></a>
     <a class="item-linha" href="editarCategoria.php?id=<?= $linha['idCategoria']?>">Editar</a>
     <a class="item-linha" href="deletar.php?id=<?= $linha['idCategoria']?>&modo=categorias">Deletar</a>
  </div>
   
<?php endwhile ?> 

<?php }else if($modo == 'imagens') { ?>

  <h1>Inventário de imagens:</h1>

<?php while ($linha = mysqli_fetch_assoc($resultado)): ?>  
      
  <div class="linha">
     <a class="item-linha" href="detalhesCategoria.php?id=<?= $linha['idImagem']?>"><img src="images/<?= $linha['imagemCategoria'] ?>" class="img-linha"> </a>
     <a class="item-linha" href="editar.php?id=<?= $linha['idImagem']?>">Editar</a>
     <a class="item-linha" href="deletar.php?id=<?= $linha['idImagem']?>&modo=imagens">Deletar</a>
  </div>
   
<?php endwhile ?> 


<?php }else{
  echo "<h1>Nenhuma tabela de dados selecionada!</h1>";
  }?>


</section>
<?php include 'footer.php' ?>    


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>