<footer>
    
    <a href="" class="item-rodape">Sobre</a>
    <a href="" class="item-rodape">Contato</a>
    <a href="" class="item-rodape">Privacidade</a>
    <a href="admin.php" class="item-rodape">Administração</a>
 
</footer>


<style>
    /* FOOTER */
footer{
    margin-top: 4%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    border-top: var(--cor3) 0.2rem solid;
    width: 100%;
}

.item-rodape{
    text-decoration: none;
    color: var(--cor4);
    padding: 2rem 4rem 2rem 4rem;
    font-size: 1.8rem;
    
}
@media(max-width:500px) {
    footer{
        width: 100%;
        align-items: center;
        height: 7vh;
        justify-content: center;
        margin:0;
    }
    .item-rodape{
        font-size:2.2rem;
    }
}
</style>