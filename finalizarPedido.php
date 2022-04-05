<?php
session_start();

require_once 'conexao.php';
require_once 'crud/crud.php';

$_SESSION['carrinho-vazio'] = "Carrinho vazio..."
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="images/m.webp">
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar pedido</title>
</head>
<body>
<div class="container">
<?php include 'header.php' ?>

<main class="caixa">

<div class="pedido-info"> 

<aside id="aviso-pedido">
    <h1>Meu pedido</h1>
    <div>
    <img src="images/herobrine.png" id="aviso-img">
    <p>
Preste atenção nas informações abaixo, e informe corretamente seu endereço para evitar possíveis incômodos.</p>
</div>

</aside>

<?php  
    if(isset($_SESSION['carrinho'])) {

   foreach($_SESSION['carrinho'] as $chave => $valor ) { 
       $subtotal =  $valor['quantidade'] * $valor['preco'];
       $frete = 12.00;
       $total = $subtotal + $frete ;
       
?>
<div class="pedidos">
    <div class="item-pedido"><a>-<?= $valor['nome']?></a>  <a>x<?=$valor['quantidade'] ?></a>  <a>R$ <?= number_format($valor['preco'] * $valor['quantidade'],2,',','.')?></a>  </div>
</div>


<?php } }  if(isset($valor['nome']) == false) {
    echo $_SESSION['carrinho-vazio'];
    $subtotal = 0;
    $frete = 0;
    $total = 0;

}
?>

<div id="endereco-info">

<aside id="aviso-endereco">

<div>   
<h1>Endereço de envio</h1>
<h3>Para onde devemos enviar?</h3>
</div>
<img src="images/ghastgamer.png" id="avisoEndereco-img">

</aside>

<form method="POST" action="salvarEndereco.php">

<div>
<input id="cepEndereco" placeholder="CEP "name="cepEndereco" type="number">
<input id="bairroEndereco" placeholder="Bairro" class="input-longo" name="bairroEndereco" type="text">
</div>

<div>
<input id="ruaEndereco" placeholder="Rua" class="input-longo" name="ruaEndereco" type="text">
<input id="numeroEndereco" placeholder="Número" name="numeroEndereco" type="number">
</div>

<input type="text" placeholder="Complemento" name="complementoEndereco" id="complementoEndereco">


</form>

</div>

</div>











</main>

</div>

<?php include 'footer.php' ?>
    
</body>
</html>