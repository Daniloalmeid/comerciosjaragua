<?php
$servername= "fd77:f3e2:38a5:c000:a:9e32:d958:92ab";
$username= "comerciosjaragu";
$password= "Danilo150101!";
$database= "comerciosjaragua";

// Cria a conexão
$conexao=mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Erro na conexão 12345: " .mysqli_connect_error());
}
?>
