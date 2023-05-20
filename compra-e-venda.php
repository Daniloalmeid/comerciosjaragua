<?php 
    include_once("config.php");
    
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $datas = $_POST['datas'];
    $comentario = $_POST['comentario'];
    
    // Lidando com o upload de imagens
    $imagen = $_FILES['imagen'];
    $nomeArquivo = $imagen['name'];
    $caminhoArquivo = 'compraevenda/' . $nomeArquivo;
    
    if (move_uploaded_file($imagen['tmp_name'], $caminhoArquivo)) {
        // Arquivo movido com sucesso, continue com a inserção no banco de dados
        $sql = "INSERT INTO anuncios (nome, telefone, email, datas, comentario, imagen) VALUES ('$nome', '$telefone', '$email', '$datas', '$comentario', '$imagen')";
        //$caminhoArquivo
    
        if (mysqli_query($conexao, $sql)) {
            echo "Anúncio criado com sucesso.";
        } else {
            echo "Erro de conexão: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao fazer upload da imagem.";
    }
    
    mysqli_close($conexao);

    //codogo novo
    
    
    

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
    <link rel="stylesheet" href="styles/compraevendaanuncios.css">
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
        <form action="compra-e-venda.php" method="post" id="containeranuncios" enctype="multipart/form-data">

                <label for="inome">Nome</label>
                <input type="text" name="nome" id="inome">
                <label for="itelefone">Telefone</label>
                <input type="tel" name="telefone" id="itelefone">
                <label for="iemail">E-mail</label>
                <input type="email" name="email" id="iemail">
                <label for="idate">Data</label>
                <input type="date" name="datas" id="idate">
                <label for="icomentario">Comentário</label>
                <input type="text" name="comentario" id="icomentario">
                <label for="iimagen">Fotos</label>
                <input type="file" name="imagen" id="iimagen">
                <label for="ianunciar">Anunciar</label>
                <input type="submit" value="Enviar2">
            </form>
            </section>

<!-- Seção de exibição de anúncios -->
<section id="exibir-anuncios">
    <h2>Anúncios</h2>
    <?php
    include_once("config.php");

    $sql = "SELECT * FROM anuncios";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $nome = $row['nome'];
            $telefone = $row['telefone'];
            $email = $row['email'];
            $datas = $row['datas'];
            $comentario = $row['comentario'];
            $imagem = $row['imagen'];

            // Exiba os dados do anúncio
            echo "<div>";
            echo "<h3>$nome</h3>";
            echo "<p>Telefone: $telefone</p>";
            echo "<p>E-mail: $email</p>";
            echo "<p>Data: $datas</p>";
            echo "<p>Comentário: $comentario</p>";
            echo "<img src='$imagem' alt='Imagem do anúncio'>";
            echo "</div>";
        }
    } else {
        echo "Nenhum anúncio encontrado.";
    }

    mysqli_close($conexao);
    ?>
</section>



        </main>
    </body>
    <h1 class="manutencao">Esta pagina esta em manutenção</h1>
    