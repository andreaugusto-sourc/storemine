# storemine
Trabalho escolar baseado em criar um e-commerce usando PHP e SQL, no meu caso escolhi o tema minecraft, pois é meu jogo preferido! Pretendo estar sempre aprimorando este projeto.

$extensao = pathinfo($imgProduto,PATHINFO_EXTENSION);

$extensao2 = pathinfo($img2Produto,PATHINFO_EXTENSION);

$imgProduto = $extensao;

$img2Produto = $extensao2;

$diretorio = "images/";

move_uploaded_file($_FILES['imgProduto']['tmp_name'],$diretorio . $imgProduto);
move_uploaded_file($_FILES['img2Produto']['tmp_name'],$diretorio . $img2Produto);