<?php
    include('config.php');
    Mysql::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style_cadastro.css" >

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <title>Cadastre-se</title>

</head>
<body>

    <?php
        if(isset($_POST[acao]) && $_POST['cadastro'] == 'cadastro'){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($nome==''){
                cadastro::alert('erro', 'o nome ficou vazio!');
            }else if($email == ''){
                cadastro::alerta('erro', 'o email ficou vazio');
            }else if($senha == ''){
                cadastro::alerta('erro', 'a senha ficou vazia');
            }else{
                cadastro::cadastrar($nome,$email,$senha);
                cadastro::alerta('erro','usuario'.$nome. 'cadastrado com sucesso!');

            }


        }



?>
    <div>
        <h1> Cadastro </h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="Email" placeholder="Email">
        <br><br>
        <input type="telephone" placeholder="Telefone">
        <br><br>
        <input type="number" placeholder="Cpf">
        <br><br>
        <input type="passoword" placeholder="Confirmar senha">
        <br><br>
        <input type="passoword" placeholder="Senha">
        <br><br>
        <a href="index.html"><button>Cadastra</button></a>



    </div>
</body>
</html>
