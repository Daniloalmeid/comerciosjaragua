<?php
$servername= "mysql.comerciosjaragua.com.br";
$username= "comerciosjaragu";
$password= "Danilo150101!";
$database= "comerciosjaragua";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $database);
//$conexao = mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Erro na conexão: " .mysqli_connect_error());
} 
else{
   echo "Conexão efetuada com sucesso";
}
?>
