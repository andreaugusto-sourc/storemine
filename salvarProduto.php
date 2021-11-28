<?php
session_start();

if(isset($_SESSION['admin'])) {

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();

$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"]/100;
$idCategoria = $_POST['idCategoria'];
$replacement = "";
$pattern = "/[A-Za-z\-]+/";
$idCategoria = preg_replace($pattern,$replacement,$idCategoria);

if (isset($_FILES["imagemProduto"])) {
    $imagem = $_FILES["imagemProduto"];

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
    if ($extensao !=  "jpg" && $extensao != 'png' && $extensao != "webp" ) {
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
$imagemProduto = $novoCaminho ."." . $extensao;
$descriProduto = $_POST["descriProduto"];
$estoqueProduto = $_POST["estoqueProduto"];

$resultado = adicionarProduto($conexao,$nomeProduto,$precoProduto,$imagemProduto,$descriProduto,$estoqueProduto,$idCategoria);

if ($resultado) {
    echo "A inserção foi feita!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Erro na inserção!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

}else {
    die("Tu não tem permissão admin, SUMA DAQUI OU FAÇA LOGIN! <a href='login.php'>Login</a>");
}


?>