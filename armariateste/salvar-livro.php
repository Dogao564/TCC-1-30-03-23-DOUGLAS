<?php
$sql = "INSERT INTO efetivo (nome, cpf, RG, MF, PostoGRAD) VALUES 
( ".$_POST['nome'].", ".$_POST['cpf'].", ".$_POST['RG'].",".$_POST['MF'].",".$_POST['PostoGRAD'].")";


  $res = $conn->query($sql);
   
    if($res==true){
            print"<script>alert('Cadastrou com sucesso')</script>";
            print"<script>location.href='?page=listar-livro';</script>";
        }else{
            print"<script>alert('Não foi possível cadastrar')</script>";
            print"<script>location.href='?page=listar-livro';</script>";
        }

?>

