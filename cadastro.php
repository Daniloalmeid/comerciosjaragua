<?php 

    include("config.php");

    $nome=$_POST['nome'];
    $emial=$_POST['email'];
    $senha=$_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(id, nome, email, senha) VALUES ('$nome', '$email', '$senha')");


    //$sql ="INSERT INTO cadastro(id, nome, email, senha) VALUES ('$id', '$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $result)){
        echo "Usuario Cadastrado com Sucesso";
    }
    else{
        echo "Erro de connexão ".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>