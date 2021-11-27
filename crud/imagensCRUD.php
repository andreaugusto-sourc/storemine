<?php

function adicionarImagem($conexao,$arquivoImagem){
    $comando = "INSERT INTO imagens (arquivoImagem) values ('$arquivoImagem')";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}
function deletarImagem($conexao,$idImagem) {
    $comando = "DELETE FROM imagens where idImagem = '$idImagem' ";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function atualizarImagem($conexao,$idImagem,$arquivoImagem) {
    $comando ="UPDATE imagens SET arquivoImagem = '$arquivoImagem' where idImagem = '$idImagem' " ;
 
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



?>