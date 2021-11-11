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




?>