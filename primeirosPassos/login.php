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
    <title>Ínicio</title>
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

    // Captura a mensagem de erro passada via GET após o redirecionamento
    if (isset($_GET["erro"])) {
        # code...
        $erro = htmlspecialchars($_GET["erro"]);
    }

    // GPT: Entendi. O problema é que, ao clicar no botão "Fazer login", você está sendo redirecionado para login.php diretamente, mas como login.php está verificando se o formulário foi enviado, ele pode estar acionando o código de validação sem que o formulário tenha sido preenchido.
    // Certifique-se de que a lógica de validação só execute quando o método de requisição for POST e não quando você apenas acessar login.php diretamente => if ($_SERVER["REQUEST_METHOD"] == "POST") { ... }
    // Verifica se o método de requisição é POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo "login" foi enviado e se está vazio
        if (!isset($_POST["login"]) || $_POST["login"] == "") {
            $erro = "Preencha o login!";
        }
        // Verifica se o campo "senha" foi enviado e se está vazio
        elseif (!isset($_POST["senha"]) || $_POST["senha"] == "") {
            $erro = "Preencha sua senha!";
        } else {
            // Se todos os campos foram preenchidos, armazena os valores das variáveis
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            
            // Verifica se o login e a senha estão corretos
            if ($login != "admin" || $senha != "1234") {
                $erro = "Login ou senha inválidos, tente novamente!";
            } else {
                // Se o login e a senha estiverem corretos, define a variável de sessão
                $_SESSION["usuario"] = "administrador";
                // Redireciona para a página do dashboard
                header("Location: dashboard.php", true, 301);
                exit(); // Adiciona um exit para garantir que o script não continue executando
            }
        }
        
        // Redireciona o usuário com base na presença de mensagens de erro
        if ($erro != "") {
            // Codifica a mensagem de erro para evitar problemas com caracteres especiais
            header("Location: login.php?erro=" . urlencode($erro), true, 301);
            exit(); // Adiciona um exit para garantir que o script não continue executando
        }
    }
    ?>

    <h1>Formulário para criação de contas</h1>
    <h2>Autoexplicativo, faça seu login aqui embaixo, vamos testar tudo!</h2>
    <hr>

    <?php 
        if ($erro != "") {
        # code...
        echo "<h2>Algo deu errado: " . htmlspecialchars($erro) . "</h2>";
        }
    ?>

    <form action="login.php" method="post" class="pure-form pure-form-stacked">

        <input type="text" name="login" id="login" placeholder="Seu login?" required>
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