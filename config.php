<?php
$servername = "mysql.comerciosjaragua.com.br";
$username = "comerciosjaragu";
$password = "Danilo150101!";
$database = "comerciosjaragua";

// Cria a conexão
$conexao=mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
