<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/editar_cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de administrador</title>
</head>
<body>
    <?php include 'header_simples.php'; ?>
    <form method="POST" action="logout.php">
    <h1>Login</h1>
     
    <label for="usuario">Usuário</label>
    <input type="text" id="usuario" name="usuario">

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha">

    <input type="submit" value="Enviar" id="botao">
    </form>
    
</body>
</html>