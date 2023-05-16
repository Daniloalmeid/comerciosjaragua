<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comécio Jaragua</title>
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/cadastrologin.css">
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
            <article>
                <div class="logo">
                    <a href="index.html"><img src="imagen/cjlogo.png" class="logo1" alt=""></a>
                </div>
            </article>
            <menu id="itens">
                <ul>
                    <li><a href="index.html" class="linkmenu">Inicio</a></li>
    
                    <li class="drop">
                    <a href="comercio.html" class="linkmenu">Comércios</a>
                    </li>
                    <li class="drop">
                        <a href="servicos.html" class="linkmenu">Serviços</a>
                        </li>
                    <li>
                        <a href="anuncie.html" class="linkmenu">Sobre nós</a></li>
                    <li>
                        <a href="contatos.html" class="linkmenu">Contatos</a>
                    </li>
                </ul>
            </menu>
        </header>
        <main id="cadastro">
            <form action="cadastro.php" method="post" id="formcadastro" >
                <h3>Cadastro</h3>
                <label for="inome">Nome</label>
                <input type="text" name="nome" id="inome">
                <label for="iemail">E-mail</label>
                <input type="email" name="E-mail" id="iemail">
                <label for="isenha">Senha</label>
                <input type="password" name="Senha" id="isenha">
                <input type="submit" value="Cadast">
                
                

            </form>
        </main>
        <script>

        </script>
</body>