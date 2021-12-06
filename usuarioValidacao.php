<?php
session_start();

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$modo = $_POST['modo'];

if ($modo == "cadastro") {

$nomeUsuario = $_POST['nomeUsuario'];
$nascUsuario = $_POST['nascUsuario'];
$cpfUsuario = $_POST['cpfUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];

$resultado = adicionarUsuario($conexao,$nomeUsuario,$nascUsuario,$cpfUsuario,$emailUsuario,$senhaUsuario);

if($resultado) {
    echo "Parabéns, cadastro efetuado!";
}else{
    echo "Revise seus dados, cadastro não efetuado";
}
}else if($modo == "login") {




}


?>

