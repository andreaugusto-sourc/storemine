<?php
session_start();

require_once 'conexao.php';
require_once 'crud/crud.php';

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

<section>

<div id="pedido-info"> 

<div id="aviso-pedido">
    <h1>Meu pedido</h1>
    <div>
    <img src="images/herobrine.png" id="aviso-img">
    <p>
Preste atenção nas informações abaixo, e informe corretamente seu endereço para evitar possíveis incômodos.</p>
</div>

</div>

<?php  
    if(isset($_SESSION['carrinho'])) {

   foreach($_SESSION['carrinho'] as $chave => $valor ) { 
?>
<div class="pedidos">
    <div class="item-pedido"><a>-<?= $valor['nome']?></a>  <a>R$ <?= number_format($valor['preco'] * $valor['quantidade'],2,',','.')?></a>  </div>
</div>


<?php } }  if(isset($valor['nome']) == false) {
    echo $_SESSION['carrinho-vazio'];

}
?>

<div id="endereco-info">

<div id="aviso-endereco">

<div>   
<h1>Endereço de envio</h1>
<h3>Para onde devemos enviar?</h3>
</div>
<img src="images/ghastgamer.png" id="avisoEndereco-img">

</div>

<form method="" action="">

<label for="cepEndereco">CEP:</label>
<input id="cepEndereco" name="cepEndereco" type="number">

<label for="bairroEndereco">Bairro:</label>
<input id="bairroEndereco" name="bairroEndereco" type="text">

<label for="ruaEndereco">Rua:</label>
<input id="ruaEndereco" name="ruaEndereco" type="text">

<label for="numeroEndereco">Número:</label>
<input id="numeroEndereco" name="numeroEndereco" type="number">

<select name="cidadeEndereco" id="cidadeEndereco">
<option>Itapetininga</option>
<option>Não entrega em outros lugares!</option>
</select>


</form>

</div>

</div>






<div id="blocos"> 
  
    
</div>


</section>


</div>
<?php include 'footer.php' ?>
    
</body>
</html>