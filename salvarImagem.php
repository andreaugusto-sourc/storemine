<?php
require_once 'crud/CRUD.php';
require_once 'conexao.php';
$conexao = conectar();
$arquivoImagem = $_POST['arquivoImagem'];

$resultado = adicionarImagem($conexao,$arquivoImagem);

if ($resultado) {
    echo "A inserção foi feita!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Erro na inserção!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}


?>