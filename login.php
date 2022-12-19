<?php 

    include "_scripts/config.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style_login.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <title>Login</title>

</head>
<body>
    <div class="container">
        <div class="campo">
            <div class="label_login row">
                <h1> Login </h1>
            </div>
            <form class="user" method="POST" action="_scripts/autenticar.php">
                <div class="input_email row">
                    <input type="email" id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Digite seu e-mail" name='email' required>
                </div>
                <div class="input_senha row">
                    <input type="passoword" id="exampleInputPassword" 
                    placeholder="Digite sua senha" name='senha' required>
                </div>
                <div class="btn_entrar row">
                    <button class="btn btn-primary btn-user btn-block">
                        Entrar
                    </button>
                </div>
                <div class="ajuda row">
                    <a href="#">esqueceu a senha?</a><br>
                    <a href="cadastro.php">Cadastra-se</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>