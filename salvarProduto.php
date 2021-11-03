<?php

require_once 'conexao.php';
require_once 'produtosCRUD.php';
$conexao = conectar();

$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"]/100;
$descriProduto = $_POST["descriProduto"];
$imgProduto = $_FILES["imgProduto"]['name'];
$img2Produto = $_FILES["img2Produto"]['name'];


$qtdProduto = $_POST["qtdProduto"];
$tipoProduto = $_POST["tipoProduto"];

$extensao = pathinfo($imgProduto,PATHINFO_EXTENSION);

$extensao2 = pathinfo($img2Produto,PATHINFO_EXTENSION);

$imgProduto = md5(time()) . ".".$extensao;

$img2Produto = md5(time()) . ".".$extensao2;

$diretorio = "images/";

move_uploaded_file($_FILES['imgProduto']['tmp_name'],$diretorio . $imgProduto);
move_uploaded_file($_FILES['img2Produto']['tmp_name'],$diretorio . $img2Produto);

$resultado =  adicionarProduto($conexao,$nomeProduto,$precoProduto,$descriProduto,$imgProduto,$img2Produto,$qtdProduto,$tipoProduto);

if ($resultado) {
    echo "A inserção foi feita!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Erro na inserção!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

?>