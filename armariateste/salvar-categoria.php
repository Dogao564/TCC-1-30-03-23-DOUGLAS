<?php
    
    
    $sql = "INSERT INTO efetivo (nome, cpf, RG, MF,equipe, PostoGRAD) VALUES ( '{$nome}', '{$cpf}', '{$RG}', '{$MF}', '{$equipe}', '{$PostoGRAD}')";

    $res = $conn->query($sql);
   

   
        
    if($res==true){
            print"<script>alert('Cadastrou com sucesso')</script>";
            print"<script>location.href='?page=listar-categoria';</script>";
        }else{
            print"<script>alert('Não foi possível cadastrar')</script>";
            print"<script>location.href='?page=listar-categoria';</script>";
        }
?>