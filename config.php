<?php
    $dbHost = 'ftp.comerciosjaragua.com.br';
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