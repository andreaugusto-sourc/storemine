
<footer>

    <div id="caminhos-footer">
    <a href="sobre.php" class="item-rodape">Sobre</a>
    <a href="" class="item-rodape">Contato</a>
    <a href="" class="item-rodape">Privacidade</a>
    <a href="admin.php" class="item-rodape">Administração</a>
    </div>

<div id="redes-sociais">
<a href="">"Nosso" instagram:</a>
<a href="https://www.instagram.com/andremartins1033/"> <ion-icon class="redes-icons" name="logo-instagram"></ion-icon> </a>
<a href="">Acesse o projeto:</a>
<a href="https://github.com/andreaugusto-sourc/storemine"> <ion-icon class="redes-icons" name="logo-github"></ion-icon> </a>
</div>
 
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="js/menu.js"></script>
<style>
/* FOOTER */
footer {
    padding: 0.5rem 0rem;
    font-size: 1.8rem;
    margin-top: 2%;
    display: flex;
    border-top: var(--cor3) 0.2rem solid;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;

}

#redes-sociais {
    justify-content: space-around;
    display: flex;
    flex-direction: column;
    align-items: center;


}

#redes-sociais a {
    color: black;
    margin-top: 1rem;
    text-align: center;
}

.redes-icons {
    padding: 1rem;
    color: black;
    font-size: 5rem;
}

#caminhos-footer {
    flex-direction: column;
    justify-content: flex-end;
    display: flex;
    align-items: center;

}

.item-rodape {
    color: var(--cor4);
    text-decoration: none;
    padding: 2rem 4rem 2rem 4rem;

}
</style>