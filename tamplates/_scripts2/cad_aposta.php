<?php
    include "../../_scripts/config.php";
    $rt1 = $_POST['rt1'];
    $rt2 = $_POST['rt2'];

    $sql = "SELECT id FROM  WHERE email = '$email'";
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