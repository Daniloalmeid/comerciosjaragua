<?php 
    include_once("config.php");

    $nome= $_POST['nome'];
    $telefone= $_POST['telefone'];
    $email= $_POST['email'];
    $datas= $_POST['datas'];
    $comentario= $_POST['comentario'];
    $imagen= $_POST['imagen'];
    


    //$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email', '$senha')");


    $sql ="INSERT INTO anuncios(nome, telefone, email, datas, comentario, imagen) VALUES ('$nome', '$telefone', '$email', '$datas', '$comentario', '$imagen')";

    //if(mysqli_query($conexao, $sql)){
       // echo "";
   //}
    //else{
        //echo "Erro de connexão ".mysqli_connect_error($conexao);
    //}
    //mysqli_close($conexao);
?>