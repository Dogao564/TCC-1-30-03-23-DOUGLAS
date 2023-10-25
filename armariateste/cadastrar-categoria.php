<h1>Cadastrar Categoria</h1>
<form action="?page=salvar-categoria" method="POST">
    <div class="mb-3">
        <label>Nome da categoria</label>
         <input type = "text" name ="nome_categoria" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</buttton>
    </div>
</form>

<?php
 echo "<script> console.log('salve') </script>";
 ?>