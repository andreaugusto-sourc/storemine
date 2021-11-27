<?php

session_start();
if(isset($_SESSION['admin'])) {

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
$idCategoria = $_POST['idCategoria'];

$novoNome = $_POST['novoNome'];
$novaDescri = $_POST['novaDescri'];

if (isset($_FILES["novaImagem"])) {
    $imagem = $_FILES["novaImagem"];

    if ($imagem['size'] > 4003269) {
        die("arquivo muito grande! Máximo de 3MB");
    }

    if($imagem['error']) {
        die("Falha ao enviar o arquivo.");
    }
    $diretorio = "images/";

    $imagemCaminho = $imagem['name'];

    $novoCaminho = uniqid();

    $extensao = strtolower(pathinfo($imagemCaminho,PATHINFO_EXTENSION));
    if ($extensao !=  "jpg" && $extensao != 'png' ) {
        die("Tipo de arquivo inválido!");
    }

    $alocacao = move_uploaded_file($imagem["tmp_name"], $diretorio . $novoCaminho . "." . $extensao);
    if($alocacao) {
        echo "Sucesso";
        echo "<br> <a href=\"images/$novoCaminho.$extensao\">Ver</a> ";
        
    
    }else{
        echo " Falha";
    }
    
}
$novaImagem = $novoCaminho . "." . $extensao ;

$resultado = atualizarCategoria($conexao,$idCategoria,$novoNome, $novaImagem, $novaDescri);

if($resultado) {
    echo "Categoria atualizada com sucesso
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Categoria não atualizado!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

}else{
    die("Tu não tem permissão admin, SUMA DAQUI OU FAÇA LOGIN! <a href='login.php'>Login</a>");
}