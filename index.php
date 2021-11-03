<?php
require_once 'conexao.php';

$conexao = conectar();

$comando = "SELECT * FROM produtos";

$resultado = mysqli_query($conexao,$comando) or die("Busca deu errado!");

$pattern = "/\./";
$replace = ",";
?>
<head>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
   <div class="container">
<?php include 'header.php'?>




<section class="caixa-produtos">
<?php while ($linha = mysqli_fetch_assoc($resultado)): ?>  
      

       <div class="produto">
        <a href="paginaProduto.php?id=<?= $linha['idProduto']?>"> <img src="images/<?= $linha["imgProduto"] ?>" class="img-produto"> </a>
        <a class ="titulo-produto" href="paginaProduto.php?id=<?= $linha['idProduto']?> "> <?= $linha['nomeProduto'] ?>  </a>
        <a class ="preco-produto" href="paginaProduto.php?id=<?= $linha['idProduto']?> "> R$ <?= preg_replace($pattern,$replace,$linha["precoProduto"]) ?> </a>
       </div> 

<?php endwhile ?> 
</section>

</div>
<?php include 'footer.php' ?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>


  
    