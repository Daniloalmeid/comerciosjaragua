<?php 
    if(isset($_POST['submit']))
{
    include("config.php");

    $nome=$_POST['nome'];
    $emial=$_POST['email'];
    $senha=$_POST['senha'];
    $sql ="INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
}

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