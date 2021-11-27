<?php

function adicionarProduto($conexao,$nomeProduto,$precoProduto,$imagemProduto,$descriProduto,$estoqueProduto,$idCategoria) {
    
    $comando = "INSERT INTO produtos (nomeProduto,precoProduto,imagemProduto,descriProduto,estoqueProduto,idCategoria)
    values ('$nomeProduto','$precoProduto','$imagemProduto','$descriProduto','$estoqueProduto','$idCategoria')";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;
   
}
function deletarProduto($conexao,$idProduto) {

    $comando = "DELETE FROM produtos where idProduto = '$idProduto'";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;

}
function atualizarProduto($conexao,$idProduto,$novoNome, $novoPreco,$novaImagem, $novaDescri,$novoEstoque,$novaCate) {

   $comando ="UPDATE produtos SET nomeProduto = '$novoNome', precoProduto = '$novoPreco', descriProduto = '$novaDescri', imagemProduto = '$novaImagem',
   estoqueProduto = '$novoEstoque', idCategoria = '$novaCate' where idProduto = '$idProduto' " ;

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