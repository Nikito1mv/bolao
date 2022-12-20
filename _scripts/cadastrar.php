<?php
include "config.php";
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];



$sql = "SELECT id FROM usuario WHERE email = '$email'";
$query = $mysqli->query($sql);
$total = $query->num_rows;



if($total>=1){
    echo "Usuário já cadastrado";
}else{
    $sql = "INSERT INTO usuario (nome, email, senha) values ( '$nome', '$email','$senha')";
    $query = $mysqli->query($sql);
    
    if($query){
        ?> <script>alert("sucesso!!")</script> <?php
        echo "<script>window.location.href='../login.php';</script>";
    }else{
        echo "Problema na query!";
    }
}


?>