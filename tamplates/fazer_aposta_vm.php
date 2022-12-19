<div class="container">
            <div class="topo_main">
                <a class="bnt_veja_mais sublinhado">
                    <h3>Veja mais..</h3>
                </a>
                <div class="label_palpite">
                    <h3>Digite seu Palpite!!</h3>
                </div>
            </div>
                
            <?php 
            $sql = "SELECT * FROM dados_jogos LIMIT 6";
            $query = $mysqli->query($sql) or die ($mysqli->error);
            $i = 1;
            $j = 2;
            while ($dados = $query->fetch_array()){
            ?>
            <form  method="POST" action="tamplates/_scripts2/cad_aposta.php">
                <div class="partida">
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
                            <?php echo $dados['rodada']; ?>
                        </div>
                    </div>

                    <div class="container linha2">
                        <div class="timea format2">
                            <img src="images/bandeiras/<?php echo $dados['timea']; ?>.png" class="flag">
                            <?php echo $dados['timea']; ?>
                        </div>

                        <div class="input1 format2">
                            <input type="text" id="rt1"
                            placeholder="0" name="rt1" required>
                        </div>

                        <div class="x_amarelo">
                            <img src="images/Xamarelo.png" class="xzinho">
                        </div>

                        <div class="input2 format2">
                            <input type="text" id="rt2" placeholder="0" name="rt2" required>
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
                            <button type="button btn btn-primary btn-user btn-block">CONFIRMAR</button>
                        </div>
                    </div>

                </div>
            </form>
            <?php $i++;$j++;} ?>
            </div>