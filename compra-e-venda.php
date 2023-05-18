<?php 
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comércios</title>
    <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/compraevenda.css">
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
            <section id="cadastro">
                <label for="nome">Nome</label>
                <input type="text" name="Nome" id="idnome">
                <label for="e-mal">E-mail</label>
                <input type="email" name="E-mail" id="idemail">
                <label for="Senha">Senha</label>
                <input type="password" name="Senha" id="idsenha">
                <input type="button" value="Envviar">
            </section>
        </main>
    </body>
    <h1 class="manutencao">Esta pagina esta em manutenção</h1>
    