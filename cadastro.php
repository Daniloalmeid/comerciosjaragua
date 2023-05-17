<?php 
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['senha']);
    }
    include("config.php");
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $emial=$_POST['email'];
    $senha=$_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(id, nome, email, senha) VALUES ('$id', '$nome', '$emial', '$senha')");

    //$sql="INSERT INTO cadastro(id, nome, email, senha) VALUES ('$id', '$nome', '$emial', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuario Cadastrado com Sucesso";
    }
    else{
        echo "Erro de connexão ".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>