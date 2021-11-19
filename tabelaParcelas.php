<?php


if ($produto['precoProduto'] < 30) {
    $parcelas = 2;

}
elseif($produto['precoProduto'] < 60) {
    $parcelas = 3;

}
elseif($produto['precoProduto'] < 90) {
    $parcelas = 4;
    
}
elseif($produto['precoProduto'] < 120) {
    $parcelas = 5;
    
}
elseif($produto['precoProduto'] < 180) {
    $parcelas = 6;
    
}else{
    $parcelas = 8;
}



?>