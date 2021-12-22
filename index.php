<?php
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

$comando = "SELECT * FROM produtos";

$resultado = mysqli_query($conexao,$comando) or die("Busca deu errado!");

?>
<head>
    <link rel="icon" href="images/m.webp">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
   <div class="container">
<?php include 'header.php'?>



<section class="caixa-produtos">
<?php while ($linha = mysqli_fetch_assoc($resultado)): ?>  
      
<div class="produto">

<a href="paginaProduto.php?id=<?= $linha['idProduto']?>"><img src="images/<?= $linha["imagemProduto"]  ?>" class="img-produto"></a>

<div class="info-mobile">

    <a href="paginaProduto.php?id=<?= $linha['idProduto']?>">
        <div class="titulo-produto"><?= $linha['nomeProduto'] ?></div>
    </a>
    <a href="paginaProduto.php?id=<?= $linha['idProduto']?>">
        <div class="preco-produto"> R$ <?= number_format($linha["precoProduto"], 2, ',', '.' ) ?> </div>
    </a>

</div>

</div>
    

<?php endwhile ?> 
</section>

</div>
<?php include 'footer.php' ?>

</body>


  
    