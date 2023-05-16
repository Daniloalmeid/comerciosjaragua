<?php
    $dbHostname = 'http://amysql.f1.k8.com.br/';
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