<?php
    include "config.php";
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id FROM usuario WHERE email = '$email'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    if($total==0){
        echo "ERROR-01 email inexistente";
    }else{
        $sql = "SELECT id FROM usuario WHERE email = '$email' and senha = '$senha'";
        $query = $mysqli->query($sql);
        $total = $query->num_rows;

        if($total==0){
            echo "ERROR-02 senha incorreta";
        }else{
            $_SESSION['email'] = $email; 
            echo "<script>window.location.href='../index.php';</script>";
        }
    }
?>