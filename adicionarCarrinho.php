<?php
session_start();
require_once 'conexao.php';
require_once 'crud/CRUD.php';

$conexao = conectar();
if(isset($_GET['adicionarUM'])) {
    $idProd = $_GET['adicionarUM'];
    $_SESSION['carrinho'][$idProd]['quantidade']++;
    echo "+1";
    header("Location: http://localhost/storemine/carrinho.php");

}
else if(isset($_GET['addCarrinho'])) {
    $idProd = (int) $_GET['addCarrinho'];
    if(isset($_SESSION['carrinho'][$idProd])) {
        $_SESSION['carrinho'][$idProd]['quantidade']++;
          header("Location: http://localhost/storemine/paginaProduto.php?id=$idProd");
}
    else{
        $idProduto = $idProd;
        $resultado = exibirProduto($conexao, $idProduto);
        $produto = mysqli_fetch_assoc($resultado);
        $_SESSION['carrinho'][$idProd] = array('id' => $idProd,'quantidade' => 1, 'nome' => $produto['nomeProduto'], 'preco' => $produto['precoProduto'], 'imagem' => $produto['imagemProduto']);
        header("Location: http://localhost/storemine/paginaProduto.php?id=$idProduto");
    }
 }else {
     echo "Tu não pode adicionar ao carrinho um produto que não existe!";
 }


?>
