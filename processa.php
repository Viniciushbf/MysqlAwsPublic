<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email =$_POST['email'];

$sql = "insert into cadastro values(null,'$nome','$email')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
       <div class="container">
           <nav>
               <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                   <a href="consulta.php"><li>Consulta</li></a>
               </ul>
           </nav>
           <section>
               <h1>Confirmação de cadastro</h1>
               <hr>
               <?php
                if($salvar == 1){
                    print "Cadastro efetuado com sucesso";
                }else{
                   print "Cadastro não efetuado já existe uma pessoa com esse E-mail" ;
                }
               ?>
              
           </selection>
       </div> 
    </body>
</html>