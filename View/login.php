<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <nav>
            <img src="../img/l.png" alt="Logo">
            <hr>
            <a href="#">
                <h3>Sobre</h3>
            </a>
        </nav>
    </header>

    <main>
        <section class="login">
            <div class="form-group">
                <h3>Bem vindo !</h3>
            </div>
            <form method="post" action="../processos/testLogin.php">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="E-mail do usuário" alt="E-mail" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" alt="Senha" name="senha" required>
                </div>

                <div class="form-group">
                    <p><span class="esqueceu-senha"> Esqueceu a senha ?</span><a href="#"> Clique aqui</a></p>
                </div>
                <div class="form-group">
                    <p><span class="criar-conta"> Não possui conta ?</span><a href="cadastro.html"> Cadastre-se</a></p>
                </div>

                <input class="btn" type="submit" value="Enviar" name="submit">

                <div class="form-group">
                    <p><span class="ajuda-suporte"> Problemas para entrar?</span><a href="#"> Contatar o suporte</a></p>
                </div>
            </form>
        </section>
    </main>


    <footer class="fixed-bottom">
        <section class="rodape">
        </section>
        <section class="contato">
            <h3>Copyright © Fatec Presidente Prudente 2023</h3>
        </section>
    </footer>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>