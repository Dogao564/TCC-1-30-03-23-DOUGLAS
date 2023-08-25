<?php 
    define ('HOST', 'localhost');
    define ('USER', 'root');
    define ('PASS', '');
    define ('BASE', 'cadastro');

    $conn = new MySQLi(HOST,USER,PASS,BASE);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Conexão bem-sucedida
echo "<script> console.log('Conexão estabelecida com sucesso') </script>";

// Fechando a conexão

?>
    