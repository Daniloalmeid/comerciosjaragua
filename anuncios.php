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

    $sql = "SELECT * FROM anuncios";
                $result = $conexao->query($sql);
                
                if ($result->num_rows > 0) {
                    // Loop para exibir cada anúncio
                    while ($row = $result->fetch_assoc()) {
                        echo "<h2>" . $row["titulo"] . "</h2>";
                        echo "<p>" . $row["descricao"] . "</p>";
                        // Aqui você pode exibir outras informações do anúncio, como preço, data, etc.
                    }
                } else {
                    echo "Nenhum anúncio encontrado.";
                }
                
                $conexao->close();
?>