<header>
    
    <img src="images/creep.png" id="img-logo">

    <a href="index.php"><h1><span>Store</span>Mine</h1></a>

    <div id="barra-pesquisa">

    <input type="text" id="input-pesquisa" placeholder="O que voce está procurando?">
    <button class="icon-pesquisa" type="submit"><ion-icon name="search-outline"></ion-icon></button>

    </div>
 
     <img src="images/minecart.png" class="imagens-link"> <a class="link" href="carrinho.php">Carrinho</a>

     <img src="images/uniao2.png" class="imagens-link">   <a class="link" href="cadastro_login.php">Cadastro ou Login</a>

</header>

<ul>
    
    <li class="item-cabecalho">Roupas</li>
    <li class="item-cabecalho">Pelúcias</li>
    <li class="item-cabecalho">Acessórios</li>
    <li class="item-cabecalho">Diversos</li>

</ul>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<style>
/* CABECALHO */
header{
    padding: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-around;
    font-size: 1.6rem;
    
}
h1{
    color: var(--cor0);
    font-size: 3.5rem;
}
span{
    color: var(--cor2);
}
#img-logo{
    width:8%;
    max-width: 120px;
}
#barra-pesquisa{
    display: flex;
    
}
#input-pesquisa{
    font-size: 1.5rem;
    width:22.75vw;
    height:5rem;
}
.icon-pesquisa{
    border: none;
    background-color: #222;
    color: white;
}
.imagens-link{
    width:5%;
}
.link{
    color:black;
}
/* MENU */
ul{
    background-color: var(--cor0);
    list-style: none;
    display: flex;
    justify-content: space-around;
    padding: 2rem;
}
.item-cabecalho{
    font-family: 'Times New Roman', Times, serif;
    color: var(--cor1);
    font-size: 2.1rem;

}

</style>