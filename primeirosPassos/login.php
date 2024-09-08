<!DOCTYPE html>
<html lang="pt-BR">
<!-- Template from C:\Users\Kazbonfim\AppData\Roaming\Code\User\FileTemplates -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <!-- Fontes genéricas que ficam bonitas; -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>
    <!-- Ínicio -->
    <title>Document</title>
    <!-- PureCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>

<body>

    <?php
    // Inicia a sessão para possibilitar o uso de variáveis de sessão
    session_start();

    // Variável para armazenar possíveis mensagens de erro
    $erro = "";

    // Verifica se o campo "login" foi enviado e se está vazio
    if (!isset($_POST["login"]) or ($_POST["login"] == "")) {
        // Caso o campo "login" não tenha sido preenchido, define a mensagem de erro
        $erro = "Preencha o login!";
    }
    // Verifica se o campo "email" foi enviado e se está vazio
    elseif (!isset($_POST["email"]) or ($_POST["email"] == "")) {
        // Caso o campo "email" não tenha sido preenchido, define a mensagem de erro
        $erro = "Preencha seu e-mail!";
    }
    // Verifica se o campo "senha" foi enviado e se está vazio
    elseif (!isset($_POST["senha"]) or ($_POST["senha"] == "")) {
        // Caso o campo "senha" não tenha sido preenchido, define a mensagem de erro
        $erro = "Preencha sua senha!";
    } else {
        // Se todos os campos foram preenchidos, armazena os valores das variáveis
        $login = $_POST["login"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Verifica se o login e a senha estão corretos
        if ($login != "admin" || $senha != "1234") {
            // Caso o login ou a senha estejam incorretos, define a mensagem de erro
            $erro = "Login ou senha inválidos, tente novamente!";
        } else {
            // Se o login e a senha estiverem corretos, define a variável de sessão
            $_SESSION["usuario"] = "administrador";
        }
    }

    // Redireciona o usuário com base na presença de mensagens de erro
    if ($erro != "") {
        // Se houver uma mensagem de erro, redireciona para a página de login com a mensagem de erro como parâmetro
        //  Quando você redireciona com a mensagem de erro na URL, é uma boa prática codificar a mensagem para evitar problemas com caracteres especiais. Use urlencode() para isso
        header("Location: login.php?erro=" . urlencode($erro), true, 301);
    } else {
        // Se não houver erro, redireciona para a página do dashboard
        header("Location: dashboard.php", true, 301);
    }
    ?>



    <h1>Formulário para criação de contas</h1>
    <h2>Autoexplicativo, faça seu login aqui embaixo, vamos testar tudo!</h2>
    <hr>

    <form action="login.php" method="post" class="pure-form pure-form-stacked">

        <input type="text" name="nome" id="nome" placeholder="Seu login?" required>
        <input type="password" name="senha" id="senha" placeholder="Sua senha?" required>

        <button type="submit" class="pure-button pure-button-primary" style="margin-left: 5%;">Enviar</button>
    </form>

    <script src="./script.js"></script>
    <!-- Boxicons: https://boxicons.com/usage#web-component-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>