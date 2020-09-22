<?php

$hostname="almo.c7f6l0ktgolz.us-east-1.rds.amazonaws.com";
$user = "admin";
$password ="admin123";
$database ="almo";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print "Falha na conexão com o Banco de Dados";
}

?>