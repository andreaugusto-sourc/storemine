<?php

function adicionarCategoria($conexao,$nomeCategoria,$descriCategoria,$imagemCategoria) {

    $comando = "INSERT INTO categorias (nomeCategoria,descriCategoria,imagemCategoria) values ('$nomeCategoria', '$descriCategoria','$imagemCategoria')";
    $resultado = mysqli_query($conexao,$comando);

    return $resultado;

}
function deletarCategoria($conexao,$idCategoria) {

    $comando = "DELETE FROM categorias where idCategoria = '$idCategoria'";

    $resultado = mysqli_query($conexao, $comando);
    return $resultado;

}
function atualizarCategoria($conexao,$idCategoria,$novoNome,$novaImagem,$novaDescri) {

    $comando ="UPDATE categorias SET nomeCategoria = '$novoNome', descriCategoria = '$novaDescri', imagemCategoria = '$novaImagem' where idCategoria = '$idCategoria' " ;
 
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
 }
function exibirCategorias($conexao) {

    $comando = "SELECT * FROM categorias";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirCategoria($conexao,$idCategoria) {

    $comando = "SELECT * FROM categorias where idCategoria = '$idCategoria'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}








?>