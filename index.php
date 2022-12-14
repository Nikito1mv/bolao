<?php 
    require_once 'assets/objetos/Team.php';
    require_once 'assets/objetos/Partida.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <h1>Hello World!</h1>
    <p>
        <?php
            $t1 = new Team("Brasil");
            print_r($t1);
        ?>
    </p>
    <p>
        <?php
            $t2 = new Team("Argentina");
            print_r($t2);
        ?>
    </p>
    <p>
        <?php
            $t3 = new Team("França");
            print_r($t3);
        ?>
    </p>
    <p>
        <?php
            $t4 = new Team("Portugal");
            print_r($t4);
        ?>
    </p>
    <p>
        <?php
            $p1 = new Partida();

            printf("Partida 1 {$p1->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            $p2 = new Partida();

            printf("Partida 2 {$p2->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            $p1->marcarPartida("", "", "", "", "", $t1, $t2);

            print_r("Partida 1 {$p1->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            $p2->marcarPartida("", "", "", "", "", $t3, $t4);

            print_r("Partida 2 {$p2->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            $p1->comecarPartida(3, 2);

            print_r("Partida 1 {$p1->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            $p2->comecarPartida(0, 0);

            print_r("Partida 2 {$p2->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            $p1->confirmaVencedor();
            $p1->finalizarPartida();

            print_r("Partida 1 {$p1->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            echo nl2br($p1->placar());
        ?>
    </p>
    <p>
        <?php
            $p2->confirmaVencedor();
            $p2->finalizarPartida();

            print_r("Partida 2 {$p2->getStatus()}");
        ?>
    </p>
    <p>
        <?php
            echo nl2br($p2->placar());
        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>
        <?php

        ?>
    </p>

</body>
</html>