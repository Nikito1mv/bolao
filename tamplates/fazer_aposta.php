<div class="container">
            <div class="topo_main">
                <div class="label_palpite">
                    <h3>Digite seu Palpite!!</h3>
                </div>
            </div>
                
            <?php 
            $sql = "SELECT * FROM dados_jogos";
            $query = $mysqli->query($sql) or die ($mysqli->error);
            $a = 1;
            while ($dados = $query->fetch_array()){
            ?>
            <form  method="POST" action="_scripts/cad_aposta.php">
                <div class="partida">
                <input type="hidden" name="jogo" value="<?php echo $dados['id']; ?>">
                    <div class="local row linha1">
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
                            <?php echo date("d/m/Y", strtotime($dados['rodada'])); ?>
                        </div>
                    </div>

                    <div class="container linha2">
                        <div class="timea format2">
                            <img src="images/bandeiras/<?php echo $dados['timea']; ?>.png" class="flag">
                            <?php echo $dados['timea']; ?>
                        </div>

                        <div class="input1 format2">
                            <input type="text" id="t1"
                            placeholder="0" name="t1" required required maxlength="2">
                        </div>

                        <div class="x_amarelo">
                            <img src="images/Xamarelo.png" class="xzinho">
                        </div>

                        <div class="input2 format2">
                            <input type="text" id="t2" placeholder="0" name="t2" required maxlength="2">
                        </div>

                        <div class="timeb format2">
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
                        <div class="btn_confirmar col format3">
                            <button type="">CONFIRMAR</button>
                        </div>
                    </div>

                </div>
            </form>
            
            <?php $a++; } ?>
            </div>