<?php
$servername= "mysql.comerciosjaragua.com.br";
$username= "comerciosjaragu";
$password= "Danilo150101!";
$database= "cadastro";

// Cria a conexão
$conexao=mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Erro na conexão 1234: " .mysqli_connect_error());
}
?>
