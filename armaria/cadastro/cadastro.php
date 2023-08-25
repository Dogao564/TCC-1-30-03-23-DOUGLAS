<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Document</title>
    
</head>
<body>
  

    <div  class="set">
        <form>
        <input type="submit" value="Configurações" onmouseover="this.classList.add('backS')" onmouseout="this.classList.remove('backS')">
        </form> 
    </div>

    <div  class="LogOut">
        <form>
        <input type="submit" value="Logout" onmouseover="this.classList.add('backL')" onmouseout="this.classList.remove('backL')" formaction="../index.php">
        </form> 
    </div>


  


<?php include ("config.php"); ?>
   
     <div class="form">

        <form action="salvar-usuario.php" method="POST" id="form">
          <input type="hidden" name="acao" value="cadastrar">

          <label>Nome </label><br>
          <input type="text" name="nome"><br>
            
          <label>E-mail </label><br>
          <input type="email" name="email"> <br>
            
          <label>Senha </label><br>
          <input type="password" name="senha"> <br><br>
            
            <button type="submit"id= "enviar">Enviar </button>    
        </form>
        </div>

      


    
</body>
</html>