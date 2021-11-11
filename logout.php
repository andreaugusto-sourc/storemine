<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario_admin = "loiron";
$senha_admin = "2610pandora";

if ($usuario == $usuario_admin && $senha == $senha_admin) {
    $_SESSION['admin'] = $usuario;
    echo "Bem vindo " . $usuario . "!";
}else{
    echo "Senha ou Usuário inválidos, tente novamente!";
}

?>