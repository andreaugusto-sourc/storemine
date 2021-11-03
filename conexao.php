<?php

function conectar () {

    $conexao = mysqli_connect("localhost","root","","storemine");
    return $conexao;
}

?>