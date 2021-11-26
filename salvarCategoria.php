<?php
session_start();

if(isset($_SESSION['admin'])) {

require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();


$nomeCategoria = $_POST['nomeCategoria'];
$descriCategoria = $_POST['descriCategoria'];
if (isset($_FILES["imagemCategoria"])) {
    $imagem = $_FILES["imagemCategoria"];

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

$imagemCategoria = $novoCaminho ."." . $extensao;

$resultado = adicionarCategoria($conexao,$nomeCategoria,$descriCategoria,$imagemCategoria);

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