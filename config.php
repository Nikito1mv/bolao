<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bolao_2022';

//string de conexão
$mysqli = new mysqli($servidor,$usuario,$senha,$banco);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: ( {$mysqli->connect_errno} ) {$mysqli->connect_errno} ";
}


?>