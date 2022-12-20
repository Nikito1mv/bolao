<?php

include "config.php";
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$jogo = $_POST['jogo'];

$sql = "INSERT INTO aposta (id_dados_jogos, t1,t2) VALUES ('$jogo','$t1','$t2')";
$query=$mysqli->query($sql);

if($query){
    ?> <script>alert("sucesso!!")</script> <?php
    echo "<script>window.location.href='../index.php';</script>";
}else{
    echo "Problema na query!";
}

