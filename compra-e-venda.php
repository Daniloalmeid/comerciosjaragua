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
            <form action="anuncios.php" method="post" id="containeranuncios">
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
            <div class="anuncios">
                <?php
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
                
            </div>
        </main>
    </body>
    <h1 class="manutencao">Esta pagina esta em manutenção</h1>
    