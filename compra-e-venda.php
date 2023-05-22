<?php
include_once("config.php");
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $datas = $_POST['datas'];
    $comentario = $_POST['comentario'];
    
    // Lidando com o upload de imagens
    $imagen = $_FILES['imagen'];

    if ($imagen['error'] === UPLOAD_ERR_OK) {
    $nomeArquivo = $imagen['name'];
    $caminhoArquivo = 'compraevenda/' . $nomeArquivo;

    if (move_uploaded_file($imagen['tmp_name'], $caminhoArquivo)) {
        // Arquivo movido com sucesso, continue com a inserção no banco de dados
        $sql = "INSERT INTO anuncios ( titulo, nome, telefone, email, datas, comentario, imagen) VALUES ( '$titulo','$nome', '$telefone', '$email', '$datas', '$comentario', '$nomeArquivo')";

        if (mysqli_query($conexao, $sql)) {
            echo "Anúncio criado com sucesso.";
        } else {
            echo "Erro ao inserir anúncio no banco de dados: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao mover o arquivo de imagem.";
    }
} elseif ($imagen['error'] === UPLOAD_ERR_NO_FILE) {
    // Não foi feito upload de imagem, continue com a inserção no banco de dados sem a imagem
    $sql = "INSERT INTO anuncios (titulo, nome, telefone, email, datas, comentario) VALUES ( '$titulo','$nome', '$telefone', '$email', '$datas', '$comentario')";

    if (mysqli_query($conexao, $sql)) {
        echo "Anúncio criado com sucesso.";
    } else {
        echo "Erro ao inserir anúncio no banco de dados: " . mysqli_error($conexao);
    }
} else {
    echo "Erro no upload da imagem: " . $imagen['error'];
}
}




    
    

    //meu codigo
    //include_once("config.php");

    //$nome= $_POST['nome'];
    //$telefone= $_POST['telefone'];
    //$email= $_POST['email'];
    //$datas= $_POST['datas'];
    //$comentario= $_POST['comentario'];
    //$imagen= $_POST['imagen'];
    


    //$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email', '$senha')");


    //$sql ="INSERT INTO anuncios(nome, telefone, email, datas, comentario, imagen) VALUES ('$nome', '$telefone', '$email', '$datas', '$comentario', '$imagen')";



    //if(mysqli_query($conexao, $sql)){
       echo "";
   //}
    //else{
        //echo "Erro de connexão ".mysqli_connect_error($conexao);
    //}
    //mysqli_close($conexao);

    //anuncios

    //$sql = "SELECT * FROM anuncios";
                //$result = $conexao->query($sql);
                
                //if ($result->num_rows > 0) {
                     //Loop para exibir cada anúncio
                    //while ($row = $result->fetch_assoc()) {
                        //echo "<h2>" . $row["nome"] . "</h2>";
                        //echo "<p>" . $row["telefone"] . "</p>";
                        //echo "<h2>" . $row["email"] . "</h2>";
                        //echo "<p>" . $row["datas"] . "</p>";
                        //echo "<h2>" . $row["comentario"] . "</h2>";
                        //echo "<img>" . $row["imagen"] . "</img>";
                         //Aqui você pode exibir outras informações do anúncio, como preço, data, etc.
                    //}
                //} else {
                    //echo "Nenhum anúncio encontrado.";
                //}
                
                //$conexao->close();
?>






<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comércios</title>
    <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/vendas.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3WEYMSX0CE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3WEYMSX0CE');
</script>

    <body>
        <header>
            <section class="redessociais">
                <h1 class="h1redessociais">Redes Socias</h1>
                <a href="https://www.facebook.com/comerciosjaragua/" target="_blank"><img src="imagen/redessociais/logo-facebook.jpg" class="redes1" alt="Facebook, Comercios jaraguá"></a>
                <a href="https://www.instagram.com/comercios_jaragua/" target="_blank"><img src="imagen/redessociais/logo-instagram.jpg" class="redes1" alt="Instagran,comercios jaraguá"></a>
                <a href="https://twitter.com/comerciojaragua" target="_blank"><img src="imagen/redessociais/logo-twitter.jpg" class="redes1" alt="twitter, comercios jaraguá"></a>
                <a href="https://www.youtube.com/@Comerciosjaragua" target="_blank"><img src="imagen/redessociais/logo-youtube.jpg" class="redes1" alt="youtube, comercios jaraguá sp"></a>
                <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511953658427" target="_blank"><img src="imagen/redessociais/watz.png" class="redes1" alt="whatapp, comercios jaraguá sp"></a>
    
            </section>
            <div class="logo">
                <a href="index.html"><img src="../imagen/cjlogo.png" class="logo1" alt="logo comércio Jaraguá"></a>
            </div>
            <menu id="itens">
                <ul>
                    <li><a href="index.html" class="linkmenu">Inicio</a></li>
                    <li class="drop">
                    <a href="comercio.html" class="linkmenu">Comércios</a>
                    </li>
                    <li class="drop">
                    <a href="servicos.html" class="linkmenu">Serviços</a>
                    </li>
                    <li><a href="anuncie.html" class="linkmenu">Sobre nós</a></li>
                    <li><a href="contatos.html" class="linkmenu">Contatos</a></li>
                </ul>
            </menu>
        </header>
        
        
        <h1 class="h1comercios"> Compra e venda </h1>
        <main>
        <section id="Anunciantes">
            <form action="compra-e-venda.php" method="post" class="containeranuncios" enctype="multipart/form-data">
                    <div class="box1">
                        <label for="ititulo">Titulo do Anúncio</label>
                        <input type="text" name="titulo" id="ititulo">
                        <label for="inome">Nome do Vendedor</label>
                        <input type="text" name="nome" id="inome">
                        <label for="itelefone">Telefone</label>
                        <input type="tel" name="telefone" id="itelefone">
                        <label for="iemail">E-mail</label>
                        <input type="email" name="email" id="iemail">
                        <label for="idate">Data</label>
                        <input type="date" name="datas" id="idate">
                    </div>
                    
                    <div class="box2">
                        <label for="icomentario">Descrição do Produto</label>
                        <input type="text" name="comentario" id="icomentario">
                        <label for="iimagen">Fotos</label>
                        <input type="file" name="imagen" id="iimagen">
                        <label for="ianunciar">Anúnciar</label>
                        <input type="submit" value="Enviar" id="enviar">
                    </div>
                   
                </form>
        </section>
            <section>
                <?php 
                    $sql = "SELECT * FROM anuncios";
                    $resultado = mysqli_query($conexao, $sql);
                    
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            $titulo = $row['titulo'];
                            $nome = $row['nome'];
                            $telefone = $row['telefone'];
                            $email = $row['email'];
                            $datas = $row['datas'];
                            $comentario = $row['comentario'];
                            $imagem = $row['imagen'];
                            
                            echo "<section style=' display: flex;
                            flex-wrap: wrap;'>";

                            echo "<div style='  width: 290px;
                            height: 550px;
                            margin: auto;
                            background-color: white;
                            padding: 20px;
                            margin-bottom: 10px;
                            border-radius: 20px;'>";

                            echo "<img src='compraevenda/$imagem' alt='Imagem do anúncio' class='imganunciantes'>";
                            
                            echo "<h3 class='h3anuncios'>$titulo</h3>";
                           // echo "<h3>$titulo</h3>";

                            echo "<p class='panunciantes'>Nome:$nome</p>";
                            echo "<p class='panunciantes'>Telefone: $telefone</p>";
                            echo "<p class='panunciantes'>E-mail: $email</p>";
                            echo "<p class='panunciantes'>Data: $datas</p>";
                            echo "<p class='descricao'>Descrição do Anuncio: $comentario</p>";
                            //echo "<img src='compraevenda/$imagem' alt='Imagem do anúncio' style='width: 260px; height: 175px;'>";
                            echo "</div>";
                            echo "</section>";
                            
                        }
                    } else {
                        echo "Nenhum anúncio encontrado.";
                    }
                    
                    mysqli_close($conexao);
                                    
                
                ?>
            </section>
            <section></section>
            

            



        </main>
    </body>
    <h1 class="manutencao">Esta pagina esta em manutenção</h1>
    