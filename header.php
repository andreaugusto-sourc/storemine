<header>
    
    <img src="images/creep.png" id="img-logo">

    <a href="index.php"><h1><span>Store</span>Mine</h1></a>

    <div id="barra-pesquisa">

    <input type="text" id="input-pesquisa" placeholder="O que voce está procurando?">
    <button type="submit"><ion-icon name="search-outline"></ion-icon></button>

    </div>
 
     <img src="images/minecart.png" class="imagens-link"> Carrinho

     <img src="images/uniao2.png" class="imagens-link">   Cadastro ou Login

</header>

<ul>
    
    <li class="item-cabecalho">Roupas</li>
    <li class="item-cabecalho">Pelúcias</li>
    <li class="item-cabecalho">Acessórios</li>
    <li class="item-cabecalho">Diversos</li>

</ul>


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
    width:18.75vw;
    height:6.2vh;
}
button{
    border: none;
    background-color: #222;
    color: white;
}
.imagens-link{
    width:5%;
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