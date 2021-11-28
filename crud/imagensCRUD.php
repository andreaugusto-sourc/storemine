<?php

function adicionarImagem($conexao,$imagemSecundaria,$idProduto){
    $comando = "INSERT INTO imagens (imagemSecundaria,idProduto) values ('$imagemSecundaria','$idProduto')";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}
function deletarImagem($conexao,$idImagem) {
    $comando = "DELETE FROM imagens where idImagem = '$idImagem' ";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function atualizarImagem($conexao,$idImagem,$imagemSecundaria) {
    $comando ="UPDATE imagens SET imagemSecundaria = 'imagemSecundaria' where idImagem = '$idImagem' " ;
 
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirImagens($conexao) {
    $comando = "SELECT * FROM imagens ";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirImagem($conexao,$idImagem) {

    $comando = "SELECT * FROM imagens where idImagem = '$idImagem'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function imagemSecundaria($conexao,$idProduto) {

    $comando = "SELECT * FROM imagens where idProduto = '$idProduto'";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}



?>