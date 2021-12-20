<section id="cabecalho">

<header>
    
    <img src="images/creep.png" id="img-logo">

    <a href="index.php"><h1><span>Store</span>Mine</h1></a>

    <div id="barra-pesquisa">

    <input type="search" id="input-pesquisa" placeholder="O que voce está procurando?">
    <button class="icon-pesquisa" type="submit"><ion-icon name="search-outline"></ion-icon></button>

    </div>
 
     <img src="images/minecart.png" class="imagens-link"> <a class="link" href="carrinho.php">Carrinho</a>

     <img src="images/uniao2.png" class="imagens-link">   <a class="link" href="cadastro_login.php">Cadastro ou Login</a>

</header>

<ul>
    
    <li class="item-ul">Roupas</li>
    <li class="item-ul">Pelúcias</li>
    <li class="item-ul">Acessórios</li>
    <li class="item-ul">Diversos</li>

</ul>

</section>

<div id="espaco"></div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<style>
/* CABECALHO */
#cabecalho{
    margin:0;
    padding:0;
    display:flex;
    flex-direction:column;
    background-color: var(--cor1);
    margin-bottom:4%;
}
header{
    padding: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-around;
    font-size: 1.6rem;
    
}
h1{
    padding:0.5rem;
    color: var(--cor0);
    font-size: 3.5rem;
}
span{
    color: var(--cor2);
}
#img-logo{
    width:10%;
    max-width:140px;
}
#barra-pesquisa{
    padding:0.5rem;
    display: flex;
    
}
#input-pesquisa{
    font-size: 1.5rem;
    width:22.75vw;
    height:5.5rem;
}
.icon-pesquisa{
    font-size:2rem;
    border: none;
    background-color: #222;
    color: white;
}
.imagens-link{
    padding:0.5rem;
    width:5%;
    
}
.link{
    color:black;
}
/* MENU */
ul{
    text-align:center;
    font-size:2rem;
    align-items: center;
    background-color: var(--cor0);
    list-style: none;
    display: flex;
    justify-content: space-around;
    padding: 2rem 3rem;
    
}
.item-ul{
    font-family: 'Times New Roman', Times, serif;
    color: var(--cor1);
    font-size: 2.1rem;
    

}

@media(max-width:500px) {
#cabecalho{
    width: 100%;
    background-color: var(--cor0);
    position: fixed;

}
header{
    background-color: var(--cor1);
    width: 100%;
}    
h1{
    margin: 0.5rem;
    font-size: 3rem;
}    
#input-pesquisa{
    width: 28%;
    margin: 0;
    font-size: 1.2rem;
    width: 100%;
    height: 2.35vh;
}
.icon-pesquisa{
    font-size:1.5rem;
   
}
ul{
    padding:0.5rem;
}
.item-ul{
    padding:0;
    font-size:2.5rem;
}

.imagens-link{
    margin: 0.3rem;
}
#espaco{
    height: 20rem;
}


}
</style>