<?php include "config.php"; ?>
<!doctype html>
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

    <title>Test</title>

</head>

<body>
<h1>Hello World!</h1>
    <div class="container">
        <div class="caixa" style="background: url(../images/campo.jpg)">
            <?php 
            $sql = "SELECT * FROM dados_jogos";
            $query = $mysqli->query($sql) or die ($mysqli->error);
            $i = 1;
            $j = 2;
            while ($dados = $query->fetch_array()){
            ?>
            <div class="row partida">
                <div class="col-12">
                Data do Jogo: <?php echo $dados['data']; ?> - 
                Hora do Jogo: <?php echo $dados['horario']; ?> - 
                Estadio: <?php echo $dados['local']; ?> - <br> 

                <img src="images/bandeiras/<?php echo $dados['timea']; ?>.png" class="flag">
                
                <?php echo $dados['timea']; ?>


                <input type="text" width="20px" name="cp<?php echo $i; ?>"> 
                
                <img src="images/Xamarelo.png" class="xzinho">
                
                <input type="text" name="cp<?php echo $j; ?>" width="20px">
                
                
                <?php echo $dados['timeb']; ?>
                <img src="images/bandeiras/<?php echo $dados['timeb']; ?>.png" class="flag"><br>

                </div>
            </div>
            <?php $i++;$j++;} ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>