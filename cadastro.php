<?php 
    include_once("config.php");

    $nome= $_POST['nome'];
    $cpf= $_POST['cpf'];
    $email= $_POST['email'];
    $telefone= $_POST['telefone'];
    $senha= $_POST['senha'];
    $confirmesenha= $_POST['confirmesenha'];
    $genero= $_POST['genero'];
    


    //$result = mysqli_query($conexao, "INSERT INTO nome, cpf, email, telefone, senha, confirmesenha, genero) VALUES ($nome', '$cpf', '$email', '$telefone', $senha', '$confirmesenha', '$genero')");


    $sql ="INSERT INTO cadastro(nome, cpf, email, telefone, senha, confirmesenha, genero) VALUES ('$nome', '$cpf', '$email', '$telefone', '$senha', '$confirmesenha', '$genero')";

    if(mysqli_query($conexao, $sql)){
        echo "";
   }
    else{
        echo "Erro de connexão ".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comercios Jaragua
    Descubra os melhores comércios e serviços do bairro Jaraguá, São Paulo, no ComerciosJaragua.">
    <meta name="keywords" content="comercios-jaragua, pirituba, produtos-amazon,pico-do-jaragua,padarias-jaragua,mercados-jaragua, parque-do-jaragua">

    <meta name="author" content="Danilo Almeida">
    <title>CashBack Comécio Jaragua</title>
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
    <link rel="image_src" href="imagen/favicon.ico"/>
    <link rel="stylesheet" href="styles/cadastro.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7162415049579984"
     crossorigin="anonymous"></script>

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3WEYMSX0CE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3WEYMSX0CE');
</script>

<script type="text/javascript" src="js/instafeed.min.js"></script>
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

        <nav class="nav-bar">
            <div class="nav-list">
                <div class="mobile-menu-icon">
                    <button onclick="menuShow()">
                        <img class="icon" src="imagen/menu/menu_FILL0_wght400_GRAD0_opsz48.svg" alt="">
                    </button>

                </div>
                <ul>
                    <li class="nav-item"><a class="alink" href="index.html" class="nav-link">Inicio</a></li>

                    <li class="nav-item"><a class="alink" href="comercio.html" class="nav-link">Comércios</a></li>

                    <li class="nav-item"><a class="alink" href="servicos.html" class="nav-link">Serviços</a></li>

                    <li class="nav-item"><a class="alink" href="cashback.html" class="nav-link">Comercios CashBack</a></li>

                    <li class="nav-item"><a class="alink" href="contatos.html" class="nav-link">Contatos</a></li>

                </ul>
                
            </div>
        </nav>
        <div class="mobile-menu">
            <!--<button >
                <img class="icon" src="imagens/menu/menu_FILL0_wght400_GRAD0_opsz48.svg" alt="">
            </button>-->
            <ul class="ul-menu">
                <li class="nav-item"><a class="alink" href="index.html" class="nav-link">Inicio</a></li>

                <li class="nav-item"><a class="alink" href="comercio.html" class="nav-link">Comércios</a></li>

                <li class="nav-item"><a class="alink" href="servicos.html" class="nav-link">Serviços</a></li>

                <li class="nav-item"><a class="alink" href="cashback.html" class="nav-link">Comercios CashBack</a></li>

                <li class="nav-item"><a class="alink" href="contatos.html" class="nav-link">Contatos</a></li>
                    
            </ul>
        </div>

    </header>

        <main>
            <div class="containercadastro">
                <div class="form-image">
                    <img src="imagen/cashback/cashback2.jpg" alt="CashBack">
                </div>
                <div class="form">
                    <form action="Cadastro.php" method="post" class="">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastre-Se</h1>
                            </div>
                            <div class="login-button">
                                <button><a class="entrar" href="login.html">Entrar</a></button>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-box">
                                <label for="nome">Nome Completo</label>
                                <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
                            </div>
                            <div class="input-box">
                                <label for="cpf">CPF:</label>
                                <input type="cpf" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                            </div>
                    
                            <div class="input-box">
                                <label for="email">E-mail:</label>
                                <input type="email" id="email" name="email" placeholder="Digite seu E-mail" required>
                            </div>
                            <div class="input-box">
                                <label for="telefone">Telefone:</label>
                                <input type="telefone" id="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                            </div>
                            <div class="input-box">
                                <label for="senha">Senha:</label>
                                <input type="senha" id="senha" name="senha" placeholder="Digite sua senha" required>
                            </div>
                            <div class="input-box">
                                <label for="senha">Confirme sua Senha:</label>
                                <input type="senha" id="senha" name="confirmesenha" placeholder="Confirme sua Senha" required>
                            </div>
                        </div>
                        <div class="dividir">

                        </div>
                        <div class="gender-inputs">
                            <div class="gender-title">
                                <h6>Gênero</h6>
                        </div>
                            <div class="gender-group">
                                <div class="gender-input">
                                    <input type="radio" id="feminino" nane="genero">
                                    <label for="feminino">Feminino</label>
                                </div>
                                <div class="gender-input">
                                    <input type="radio" id="Masculino" nane="genero">
                                    <label for="mascolino">Masculino</label>
                                </div>
                                <div class="gender-input">
                                    <input type="radio" id="outros" nane="genero">
                                    <label for="outros">outros</label>
                                </div>
                            </div>
                        </div>
                        <div class="continue-button">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>
            </div>


           
            
            <!-- <section id="compras">
                <h2>Registre Suas Compras</h2>
                <form action="processa_compra.php" method="POST">
                    <label for="valor">Valor da Compra:</label>
                    <input type="number" id="valor" name="valor" required><br>
            
                    <label for="comercio">Comércio:</label>
                    <select id="comercio" name="comercio" required>
                        <option value="loja1">Loja 1</option>
                        <option value="loja2">Loja 2</option>
                        <!-- Adicione mais opções para outros comércios
                    </select><br>
            
                    <input type="submit" value="Registrar Compra">
                </form>
            </section>
            
            <section id="saldo">
                <h2>Seu Saldo de Cashback</h2>
                <p>Seu saldo atual é: R$ <span id="saldo-atual">0.00</span></p>
            </section> -->
        </main>

        <footer>
            <div class="footer_contact">
                <div>
                    
                    <h1 class="h1footer">Comércios Jaragua </h1>
                    <div class="footer_social_media">
                        <a href="https://www.facebook.com/comerciosjaragua/" target="_blank"><img src="imagen/redessociais/logo-facebook.jpg" class="redes2" alt=""></a>
                        <a href="https://www.instagram.com/comercios_jaragua/" target="_blank"><img src="imagen/redessociais/logo-instagram.jpg" class="redes2" alt=""></a>
                        <a href="https://twitter.com/comerciojaragua" target="_blank"><img src="imagen/redessociais/logo-twitter.jpg" class="redes2" alt=""></a>
                        <a href="https://www.youtube.com/@Comerciosjaragua" target="_blank"><img src="imagen/redessociais/logo-youtube.jpg" class="redes2" alt=""></a>
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511953658427" target="_blank"><img src="imagen/redessociais/watz.png" class="redes2" alt="whatapp"></a>
                </div>
                </div>
                <ul class="footer-list">
                    <li>
                        <h3>Site</h3>
                    </li>
                   
                    <li>
                        <a href="comercio.html" class="footer-link">Comércios</a>
                    </li>
                    <li>
                        <a href="emprego.html" class="footer-link">Empregos</a>
                    </li>
                    <li>
                        <a href="servicos.html" class="footer-link">Serviços</a>
                    </li>
                    <li>
                        <a href="anuncie.html" class="footer-link">Anúncie</a>
                    </li>
                    <li>
                        <a href="compra-e-venda.html" class="footer-link">Compra e venda</a>
                    </li>
                    <li>
                        <a href="bairro-jaragua.html" class="footer-link">Bairro Jaraguá</a>
                    </li>
                    <li>
                        <a href="pico-do-jaragua.html" class="footer-link">Pico do Jaragua</a>
                    </li>
                    <li>
                        <a href="pico-do-jaragua.html" class="footer-link">Parque do Jaraguá</a>
                    </li>
                
                </ul>
                <!-- <div id="input_group">
                    <p>Entre com seu email para Receber novidades do bairro e comercios do Jaraguá</p>
                    <input type="email" id="email">
                    <button>
                        <img src="imagen/redessociais/envelope.png" alt="">
                    </button>
                </div>-->
    
            </div>
            <div id="footer_copyright">
                &#169 
                Todos os direitos reservado ao Comerciosjaraguá
            </div>
    
        <footer>

        <script src="js/menu.js"></script>
</body>
