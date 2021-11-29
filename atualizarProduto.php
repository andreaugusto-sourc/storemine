<?php
session_start();

if(isset($_SESSION['admin'])) {

require_once 'conexao.php';
require_once 'crud/CRUD.php';
$conexao = conectar();
$idProduto = $_POST['idProduto'];
$novoNome = $_POST['novoNome'];
$novoPreco = $_POST['novoPreco'];
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
    if ($extensao !=  "jpg" && $extensao != 'png' && $extensao != 'webp' ) {
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
$novaCate = $_POST['novaCate'];
$replacement = "";
$pattern = "/[A-Za-z\-]+/";
$novaCate = preg_replace($pattern,$replacement,$novaCate);
$novaDescri = $_POST['novaDescri'];
$novoEstoque = $_POST['novoEstoque'];

echo "Nome - " . $novoNome;
echo "NovoPreco - " . $novoPreco;
echo "novaImagem - " . $novaImagem;
echo "novaDescri - " . $novaDescri;
echo "novoEstoque - " . $novoEstoque;
echo "novaCate - " . $novaCate;
$resultado = atualizarProduto($conexao,$idProduto,$novoNome, $novoPreco, $novaImagem, $novaDescri,$novoEstoque,$novaCate);

if($resultado) {
    echo "Produto atualizado com sucesso
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
    echo "Produto não atualizado!
    <br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

}else {
    die("Tu não tem permissão admin, SUMA DAQUI OU FAÇA LOGIN! <a href='login.php'>Login</a>");
}
?>


