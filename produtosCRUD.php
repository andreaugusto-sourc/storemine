<?php

function adicionarProduto($conexao,$nomeProduto,$precoProduto,$descriProduto,$imgProduto,$img2Produto,$qtdProduto,$tipoProduto) {
    
    $comando = "INSERT INTO produtos (nomeProduto,precoProduto,descriProduto,imgProduto,img2Produto,qtdProduto,tipoProduto)
    values ('$nomeProduto','$precoProduto','$descriProduto','$imgProduto','$img2Produto','$qtdProduto','$tipoProduto')";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;
   
}
function deletarProduto($conexao,$idProduto) {

    $comando = "DELETE FROM produtos where idProduto = '$idProduto'";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;

}
function atualizarProduto($conexao,$idProduto,$novoNome, $novoPreco, $novaDescri,$novoImg,$novoImg2,$novaQtd,$novoTipo) {

   $comando ="UPDATE produtos SET nomeProduto = '$novoNome', precoProduto = '$novoPreco', descriProduto = '$novaDescri', imgProduto = '$novoImg', img2Produto = '$novoImg2',
   qtdProduto = '$novaQtd', tipoProduto = '$novoTipo' where idProduto = '$idProduto' " ;

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