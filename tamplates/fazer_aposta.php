<div class="container">
            <div class="topo_main">
                <a class="bnt_voltar sublinhado">
                    <h3>Voltar</h3>
                </a>
                <div class="label_palpite">
                    <h3>Digite seu Palpite!!</h3>
                </div>
            </div>
                
            <?php 
            $sql = "SELECT * FROM dados_jogos";
            $query = $mysqli->query($sql) or die ($mysqli->error);
            $i = 1;
            $j = 2;
            while ($dados = $query->fetch_array()){
            ?>
                <div class="partida">
                    <div class="row linha1">
                        <div class="estadio col format1">
                            <?php echo $dados['local']; ?>
                        </div>
                        <div class="horario col format1">
                            <?php echo $dados['horario']; ?>h
                        </div>
                        <div class="data col format1">
                            <?php echo $dados['data']; ?>
                        </div>
                        <div class="rodada col format1">
                            <?php echo $dados['rodada']; ?>
                        </div>
                    </div>

                    <div class="container linha2">
                        <div class="format2">
                            <img src="images/bandeiras/<?php echo $dados['timea']; ?>.png" class="flag">
                            <?php echo $dados['timea']; ?>
                        </div>

                        <div class="format2">
                            <input type="text" id="fname" name="fname">
                        </div>

                        <div class="">
                            <img src="images/Xamarelo.png" class="xzinho">
                        </div>

                        <div class="format2">
                            <input type="text" id="fname" name="fname">
                        </div>

                        <div class="format2">
                            <?php echo $dados['timeb']; ?>
                            <img src="images/bandeiras/<?php echo $dados['timeb']; ?>.png" class="flag">
                        </div>
                    </div>

                    <div class="row linha3">
                        <div class="tipo col format3">
                            <?php echo $dados['tipo']; ?>
                        </div>
                        <div class="status col format3">
                            Status: <?php echo $dados['status_jogo']; ?>
                        </div>
                    </div>

                </div>
            <?php $i++;$j++;} ?>
            </div>