<?php 

    include_once("config.php");
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $emial=$_POST['email'];
    $senha=$_POST['senha'];


    $sql = "INSERT INTO cadastro(id, nome, email, senha) VALUES ('$id', '$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuario Cadastrado com Sucesso";
    }
    else{
        echo "Erro de connexão ".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>