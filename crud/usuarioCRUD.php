<?php

function adicionarUsuario ($conexao,$nomeUsuario,$nascUsuario,$cpfUsuario,$emailUsuario,$senhaUsuario) {
    $comando = "INSERT INTO usuarios (nomeUsuario,nascUsuario,cpfUsuario,emailUsuario,senhaUsuario) values ('$nomeUsuario','$nascUsuario','$cpfUsuario','$emailUsuario','$senhaUsuario')";
    
    $resultado = mysqli_query($conexao,$comando);
    return $resultado; 

}
function deletarUsuario () {
    $comando = "DELETE FROM usuarios where idUsuario = '$idUsuario'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado; 

}
function atualizarUsuario () {

}
function exibirUsuario () {

}
function exibirUsuarios () {

}


?>