<?php

function adicionarProduto($conexao,$nomeProduto,$precoProduto,$descriProduto,$estoqueProduto) {
    
    $comando = "INSERT INTO produtos (nomeProduto,precoProduto,descriProduto,estoqueProduto)
    values ('$nomeProduto','$precoProduto','$descriProduto','$estoqueProduto')";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;
   
}
function deletarProduto($conexao,$idProduto) {

    $comando = "DELETE FROM produtos where idProduto = '$idProduto'";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;

}
function atualizarProduto($conexao,$idProduto,$novoNome, $novoPreco, $novaDescri,$novoEstoque) {

   $comando ="UPDATE produtos SET nomeProduto = '$novoNome', precoProduto = '$novoPreco', descriProduto = '$novaDescri',
   estoqueProduto = '$novoEstoque' where idProduto = '$idProduto' " ;

   $resultado = mysqli_query($conexao,$comando);
   return $resultado;
}
function exibirProdutos($conexao) {

    $comando = "SELECT * FROM produtos";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}

function exibirProduto($conexao,$idProduto) {

    $comando = "SELECT * FROM produtos where idProduto = '$idProduto'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}

?>