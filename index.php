<?php include "_scripts/config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" >

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <title>Bolão 2022</title>

</head>
<body>

    <!--header começo-->
    <div class="header">
        <h2>World Cup</h2>

        <div>
            <a href="#" class="btn_nav">Sair</a>
            <a href="cadastro.php" class="btn_nav">Cadastra-se</a>
            <a href="login.php" class="btn_nav">Entrar</a>
        </div>
    </div>
    <!--header final-->

    <!-- Início do corpo do site -->
    <div class="caixa">

        <!-- Início da barra lateral esquerda -->
        <div class="left-sidebar col-2" style="order: 0">
            <a href="index.php">
                <img src="images/FIFA-World-Cup-Qatar-logo-png.png" class="image_logo" alt="">
            </a>
            <div class="inicio menu">
                <a href="index.php" class="btn_inicio">
                    <h3>INÍCIO</h3>
                </a>
            </div>
            <div class="pntuacao menu">
                <a href="#" class="btn_menu">
                    <ion-icon name="calendar-clear-outline"></ion-icon>
                    PONTUAÇÃO
                </a>
            </div>
            <div class="minhas_apostas menu">
                <a href="#" class="btn_menu">
                    <ion-icon name="information-circle-outline"></ion-icon>
                    MINHAS APOSTAS
                </a>
            </div>
            <div class="resultados menu">
                <a href="#" class="btn_menu">
                    <ion-icon name="camera-outline"></ion-icon>
                    RESULTADOS
                </a>
            </div>
            <div class="nova_aposta menu">
                <a href="#" class="btn_menu">
                    <ion-icon name="information-circle-outline"></ion-icon>
                    FAZER NOVA APOSTA
                </a>
            </div>
            
        </div>
        <!-- Fim da barra lateral esquerda -->
        
        <!-- Início do conteúdo do site -->
        <div class="main-content col-9" style="order: 1">
            <div class="main cor">
                <?php 
                include "tamplates/fazer_aposta.php"; 
                // include "tamplates/resultados.php"; 
                // include "tamplates/meus_palpites.php"; 
                ?>
            </div>
        </div>
        <!-- Fim do conteúdo do site -->
        
        <!-- Início da barra lateral direita -->
        <div class="right-sidebar col-1" style="order: 2">
            <div class="opcoes menu">
                <a href="#" class="btn_menu">
                    <ion-icon name="calendar-clear-outline"></ion-icon>
                    OPÇÕES
                </a>
            </div>
        </div>
        <!-- Fim da barra lateral direita -->

    </div>
    <!-- Fim do corpo do site -->


	
		
		
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>