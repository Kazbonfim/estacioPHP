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

    $nome = "";
    $idade = 0;
    $email = "";

    ?>

    <h1>Primeiros Passos com PHP</h1>
    <a href="dashboard.php"><button type="button">Acessar Dashboard</button></a>
    <hr>
    <p>Um pequeno projeto, sem fins lucrativos, mas com fins educativos, pra aprender a utilizar PHP de uma forma mais
        eficiente.</p>

    <div>
        <form action="">
            <input type="text" name="" id="" placeholder="Nome completo">
            <input type="text" name="" id="" placeholder="Idade">
            <input type="email" name="" id="" placeholder="E-mail">

            <button type="submit">Confirmar</button>
        </form>
    </div>

    <br>

    <table class="pure-table" style="width: 50%; max-height: 10%;">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>E-mail</th>
        </tr>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $idade; ?></td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>


    <script src="./script.js"></script>
    <!-- Boxicons: https://boxicons.com/usage#web-component-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>