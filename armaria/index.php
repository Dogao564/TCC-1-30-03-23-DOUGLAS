<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css login.css">
    <title>Document</title>
</head>
<body>
<?php include ("config.php"); ?>

   
    <div class="quad">
        <div class="elemento-centralizado">
    <form action="login.php" method ="POST">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome"><br><br>
      <label for="password">Senha:</label>
      <input type="password" id="senha" name="senha"><br><br>
      <input type="submit" value="Enviar" >
    </form>
    </div>
    </div>
   

    
    
</body>
</html>