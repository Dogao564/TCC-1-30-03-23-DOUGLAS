<?php
    session_start();

    if (empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["senha"])))) {
        print "<script>location.href='index.php';</script>";
    }

    include ('config.php');

    $nome = $_POST["nome"];
    $senha = md5($_POST["senha"]);

    $sql = "SELECT * FROM usuarios
            WHERE nome = '{$nome}'
            AND senha = '{$senha}'";

    $res = $conn->query($sql) or die ($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
    $_SESSION["nome"] = $nome;
          
    print "<script>location.href='cadastro/cadastro.php'</script>";
    }else{
    print "<script>alert('Usuario ou Senha incorreto')</script>";
    print "<script>location.href='index.php'</script>";

    }