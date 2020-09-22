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
               <h1>Cadastro de Usuários</h1>
               <hr>

               <form method="post" action="processa.php">
                   

                    <label>Nome</label>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus>
                    <label>Email</label> 
                    <input type="email" name="email" class="campo" maxlength="50" required >
                <div>
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                </div>
                </form>
           </selection>
       </div> 
    </body>
</html>