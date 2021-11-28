<?php
require_once 'crud/CRUD.php';
require_once 'conexao.php';
$conexao = conectar();

if (isset($_FILES["imagemSecundaria"])) {
    $imagem = $_FILES["imagemSecundaria"];

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
        echo "<br> <a href=\"images/$novoCaminho.$extensao\">Ver imagem secundária</a> ";
        
    
    }else{
        echo " Falha";
    }
    
}
$imagemSecundaria = $novoCaminho ."." . $extensao;

$idProduto = $_POST['idProduto'];
$replacement = "";
$pattern = "/[A-Za-z\-]+/";
$idProduto = preg_replace($pattern,$replacement,$idProduto);


$resultado = adicionarImagem($conexao,$imagemSecundaria,$idProduto);

if ($resultado) {
    echo "A inserção foi feita!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Erro na inserção!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}


?>