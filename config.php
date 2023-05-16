<?php
$servername= "https://amysql.f1.k8.com.br/";
$username= "comerciosjaragu";
$password= "Danilo150101!";
$database= "comerciosjaragua";

// Cria a conexão
$conexao = mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Erro na conexão: " .mysqli_connect_error());
}
?>
