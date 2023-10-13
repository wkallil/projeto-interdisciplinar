<!-- pequeno improviso -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
    
<body>
    <div class="main-login">
        <div class="esquerda">
            <h1>AOKI BAGS</h1>
            <img src="../img/logo_eco-removebg-preview.png" class="logo" alt="sacolas">
        </div>
        <form action="testeLogin.php" method="POST">
            <div class="direita">
                <div class="caixa-login">
                    <h1>Login</h1>
                    <div class="text">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário" required>
                    </div>
                    <div class="text">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <input class="botao-login" type="submit" value="Login">
                    <p class="cad">Ainda não tem uma conta?<a href="./cadastro.php" target="_parent">Cadastre-se
                            aqui!</a></p>
                    <p class="rec">Esqueceu sua senha? Recupere aqui.</p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>