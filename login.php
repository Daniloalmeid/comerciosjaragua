<?php 

    if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha']))
    {   
        //acessa
        include_once('config.php');
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

        $result =$conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            header('location:login.html');
        }
        else
        {
            header('Location:compra-e-venda.html');
        }
    }
    else
    {
        header('location:login.html');
    }

?>