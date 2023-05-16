<?php
    $dbHost = 'fd77:f3e2:38a5:c000:a:9e32:d958:92ab';
    $dbUsername = 'comerciosjaragu';
    $dbPassword = 'Danilo150101!'
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    if($conexao->connect_errno)
    {
        echo "Erro"
    }
    else
    {
        echo "conexão efetuada co  sucesso"
    }
?>