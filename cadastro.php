<?php 

    $servername= "mysql.comerciosjaragua.com.br";
    $username= "comerciosjaragu";
    $password= "Danilo150101!";
    $database= "comerciosjaragua";
    
    // Cria a conexão
    $conexao = new mysqli($servername, $username, $password, $database);
    //$conexao = mysqli_connect($servername, $username, $password, $database);
    
    // Verifica se a conexão foi estabelecida com sucesso
    if($conexao->connect_errno)
    {
       echo "erro";
    }
    else{
       Echo "conexão efetuada com sucesso";
    }
    
    //if (!$conexao) {
       // die("Erro na conexão: " .mysqli_connect_error());
    //} 
    //else{
       //echo "Conexão efetuada com sucesso";
    //}

    //include("config.php");

    //$nome=$_POST['nome'];
    //$email=$_POST['email'];
    //$senha=$_POST['senha'];

    //$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email', '$senha')");


    $sql ="INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuario Cadastrado com Sucesso";
    }
    else{
        echo "Erro de connexão ".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>