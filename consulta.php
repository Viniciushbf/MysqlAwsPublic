<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET["filtro"]:"";

$sql = "select * from cadastro where nome like '%$filtro%' order by nome ";
$consulta = mysqli_query($conexao,$sql);
$registro = mysqli_num_rows($consulta);


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
               <h1>Consulta cadastros</h1>
               <hr>
			   <form method="get" action="">
					<label>Filtrar por nome:</label>
					<input type="text" name="filtro" class="campo" required>
					<input type="submit" value="Pesquisar" class="btn">
			   </form>
               <?php
                
				print "<p>Resultado da pesquisa com a palavra <strong>$filtro</strong>.</p>";
				
				print "$registro registros encontrados";
				
				while($exibirRegisto = mysqli_fetch_array($consulta)){
					$codigo = $exibirRegisto[0];
					$nome = $exibirRegisto[1];
					$email = $exibirRegisto[2];
					
					print "<article>";
					
					print "<p>Código: $codigo</p>";
					print "<p>Nome da pessoa: $nome</p>";
					print "<p>E-mail da pessoa: $email</p>";
					
					print "</article>";
				}
				
				mysqli_close($conexao);
               ?>
              
           </selection>
       </div> 
    </body>
</html>