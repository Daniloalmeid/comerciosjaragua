<?php
    $Hostname = 'http://amysql.f1.k8.com.br/';
    $Username = 'comerciosjaragu';
    $Password = 'Danilo150101!'
    $Name = 'cadastro';

    $conexao = new mysqli($dbHostname,$dbUsername,$dbPassword,$dbName);
    if($conexao->connect_errno)
    {
        echo "Erro"
    }
    else
    {
        echo "conexão efetuada co  sucesso"
    }
?>