<?php
include ("config.php");

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ( '{$nome}', '{$email}', '{$senha}')";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('!)'</script>";
            print "<script>location.href = '../index.php';</script>";
        } else {
            echo "Erro ao inserir dados: " . $conn->error;
        }
            break;
    case 'editar':
            # code...
            break;

    case 'excluir':
                # code...
                break;        
}