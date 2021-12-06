<?php



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/login_usuario.css">
    <link rel="icon" href="images/m.webp">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro/Login</title>
</head>

<body>
    <div class="container">
        <?php include 'header.php';  ?>
        <section>
            <div class="estrutura">
                <aside>Novo usuário? Cadastre-se aqui!</aside>
                <h2>Cadastro:</h2>
                <form action="usuarioValidacao.php" method="POST">

                    <input type="hidden" name="modo" value="cadastro">

                    <label for="nomeUsuario">Insira seu nome completo:</label>
                    <input type="text" placeholder="José Oliveira dos Santos" id="nomeUsuario" name="nomeUsuario">

                    <div class="decoracao">
                        <div class="bloco">
                            <label for="nascUsuario">Data de Nascimento:</label>
                            <input type="date" id="nascUsuario" name="nascUsuario">

                            <label for="cpfUsuario">CPF:</label>
                            <input type="number" id="cpfUsuario" name="cpfUsuario" placeholder="23197698980">
                        </div>
                        <img src="images/grass.png" class="decoracao2-img">
                    </div>

                    <label for="emailUsuario">E-mail:</label>
                    <input type="email" id="emailUsuario" name="emailUsuario" placeholder="jorginhocraft128@gmail.com">

                    <label for="senhaUsuario">Senha:</label>
                    <input type="password" id="senhaUsuario" name="senhaUsuario">

                    <input type="submit" value="Cadastrar" id="botao">
                </form>
            </div>

            <div class="estrutura">
                <aside>Já é cadastrado? Entre aqui!</aside>
                <h2>Login:</h2>
                <form action="usuarioValidacao.php" method="POST">

                    <input type="hidden" name="modo" value="login">

                    <div class="decoracao">
                        <img src="images/loboosso.jpg" class="decoracao-img">
                        <article>Ainda bem que você voltou! O Lobinho estava te esperando...</article>
                    </div>

                    <label for="emailLogin">Email:</label>
                    <input type="email" id="emailLogin" name="emailLogin">

                    <label for="senhaLogin">Senha:</label>
                    <input type="password" id="senhaLogin" name="senhaLogin">

                    <div class="decoracao">
                        <div class="bloco">
                            <small>Esqueci minha senha</small>

                            <input type="submit" value="Logar" id="botao">
                        </div>
                        <img src="images/creeperface.jpg" class="decoracao3-img">
                    </div>
                </form>

            </div>
        </section>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>