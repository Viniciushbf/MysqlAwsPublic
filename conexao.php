<?php
try {
    $connect = new mysqli("awsmysql.c7f6l0ktgolz.us-east-1.rds.amazonaws.com","admin","admin123","cad");
    $connect->set_charset("utf8mb4");
} catch(Exception $e){
    error_log($e->getMessage());
    exit('Erro ao tentar conectar ao banco de dados');
}
?>
