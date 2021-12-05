<?php
require_once 'conexao.php';
require_once 'crud/CRUD.php';
$conexao = conectar();

if ($_GET['modo'] == "produtos") {
    $idProduto = $_GET['id'];   
    $resultado = deletarProduto($conexao,$idProduto);
    echo $idProduto;
}else if ($_GET['modo'] == "categorias") {
    $idCategoria = $_GET['id'];
    $resultado = deletarCategoria($conexao,$idCategoria);
    echo $idCategoria;
}else {
    $idImagem = $_GET['id'];
    $resultado = deletarImagem($conexao,$idImagem);
    echo $idImagem;
}




if ($resultado){
    echo "Deletado com sucesso!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Não deletado!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

