<?php 

    include "_scripts/config.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style_cadastro.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <title>Cadastro</title>

</head>
<body>
    <div class="fut">
        <div class="container">
            <div class="label_login row1">
                <h1> Cadastro </h1>
            </div>
            <form class="user" method="POST" action="_scripts/autenticar.php">
                <div class="input_nome row1">
                    <label for="">Nome</label><br>
                    <input type="email" id="nome" aria-describedby="emailHelp"
                    placeholder="Digite seu Nome" name='nome' required>
                </div>
                <div class="input_cpf row1">
                <label for="">CPF</label><br>
                    <input type="email" id="cpf" aria-describedby="emailHelp"
                    placeholder="Digite seu CPF" name='cps' required>
                </div>
                <div class="input_email row1">
                <label for="">E-mail</label><br>
                    <input type="email" id="email" aria-describedby="emailHelp"
                    placeholder="Digite seu e-mail" name='email' required>
                </div>
                <div class="input_telefone row1">
                <label for="">Telefone</label><br>
                    <input type="email" id="telefone" aria-describedby="emailHelp"
                    placeholder="Digite seu telefone" name='telefone' required>
                </div>
                <div class="input_senha row1">
                <label for="">Senha</label><br>
                    <input type="email" id="senha" aria-describedby="emailHelp"
                    placeholder="Digite sua senha" name='semha' required><br>
                    <input type="passoword" id="confirma_senha" 
                    placeholder="Comfirme a senha" name='confirma_senha' required>
                </div>
                <div class="btn_cadastrar row1">
                    <button class="btn btn-primary btn-user btn-block">
                        CADASTRAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>