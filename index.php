<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV LED Samsung</title>

    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <?php
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: PUT, GET, POST");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    ?>

    <span id="inicio"></span>

    <!-- Trecho De Menu Da Televisão -->

    <header class="barraDeMenu">
        <div class="logoSamsung">
            <a href="#inicio"><img id="logoMarca" src="./imagens/samsungLogo.png" alt="Samsung"></a>
        </div>
        <div class="botaoEmailParaPromocoes">
            <a href="#form"> QUERO RECEBER AVISOS! </a>
        </div>
    </header>

    <!-- Trecho De Carrossel Da Televisão -->

    <div class="televisor" id="televisor">
        <div class="carrosselTelevisor"> 
            <div id="demo" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./imagens/TvSamsungImagem_01.jpg" alt="TvSamsungImagem_01">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_02.jpg" alt="TvSamsungImagem_02">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_03.jpg" alt="TvSamsungImagem_03">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_04.jpg" alt="TvSamsungImagem_04">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_05.jpg" alt="TvSamsungImagem_05">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_06.jpg" alt="TvSamsungImagem_06">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_07.jpg" alt="TvSamsungImagem_07">
                    </div>
                    <div class="carousel-item">
                      <img src="./imagens/TvSamsungImagem_09.jpg" alt="TvSamsungImagem_09">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>
        <div class="botaoAnuncios">
            <h3>Samsung Smart TV Tizen FHD T5300 40" 2020, HDR</h3>
            <br>
            <h3> R$2.399,00 </h3>
            <br>
            <br>
            <a href="#"> AONDE COMPRAR </a>
        </div>
    </div>

    <!-- Trecho De Destaques Da Televisão -->

    <div class="destaquesProduto">
        <section class="destaque">
            <div class="icones">
                <h2> <i class="fas fa-tv"></i> </h2>
            </div>
            <div class="texto">
                <h3> Full HD </h3>
                <h6>Resolução 2X Melhor Que Televisores HD</h6>
            </div>
        </section>
        <section class="destaque">
            <div class="icones" id="smart">
                <h3> <i class="fas fa-wifi"></i> </h3>
            </div>
            <div class="texto">
                <h3> Smart TV </h3>
                <h6>Acesso A Internet E Diversos Aplicativos De Streaming</h6>
            </div>
        </section>
        <section class="destaque">
            <div class="icones">
                <h2> <i class="fas fa-microchip"></i> </h2>
            </div>
            <div class="texto">
                <h3> HDR </h3>
                <h6>Cores Mais Vividas E Realistas</h6>
            </div>
        </section>
    </div>

    <!-- Trecho De Especificações Da Televisão -->

    <div class="especificacoesTecnicas">
        <div class="especificacoes">
            <h3>Vídeo:</h3>
                <li> Processador | Hyper Real </li>
                <li> Frequência | 60Hz </li>
                <li> PQI (Picture Quality Index) | 1000 </li>
                <li> Contraste | Mega Contraste </li>
                <li> Micro Dimming | Micro Dimming Pro </li>
                <li> Aprimoramento de contraste | Sim </li>
        </div>

        <div class="especificacoes bordaEsquerda">
            <h3>Áudio:</h3>
                <li> Dolby Digital Plus | Sim </li>
                <li> Tipo de alto-falante | 2 Canais </li>
                <li> Som em Movimento | Não </li>
                <li> Potência (RMS) | 20W </li>
                <li> Bluetooth de Áudio | Micro Dimming Pro </li>
                <li> Multiroom Link | Sim </li>
        </div>

        <div class="especificacoes bordaEsquerda">
            <h3>Conectividade:</h3>
                <li> HDMI | 2 </li>
                <li> USB | 1 </li>
                <li> Entrada de Componente (Y,Pb,Pr) | 1 </li>
                <li> Ethernet (LAN) | 1 </li>
                <li> Saída de Áudio Digital (Óptica) | 1 </li>
                <li> Wi Fi | Sim (WiFi4) </li>
        </div>
    </div>

    <!-- Trecho De Formulário Da Televisão -->

    <div id="form" class="form">
        <div class="textoForm">
            <h1> Gostou Do Produto? </h1>
            <br>
            <h3> Informe Seu Email Para Receber Avisos De Futuras Promoções: </h3>
        </div>

        <div class="inputsForm">
            <form action="controleDoForm" method="post" name="Form" id="Form">
                <label for="email">
                    <input type="email" name="iptEmail" id="iptEmail" placeholder="Digite Seu Email: " required>
                </label>
                <br>
                <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar">
            </form>
        </div>
    </div>

    <!-- Trecho De Emails Listados Da Televisão -->

    <div class="emailsCadastrados">
        <h3>    Para Acessar Todos Os Emails Já Cadastrados </h3>
        <a href="./SCRIPTS/mostrarEmails.php"> Clique Aqui </a>
    </div>

    <script src="./SCRIPTS/jQuery.min.js"></script>
    <script src="./SCRIPTS/Javascript.js"></script>

</body>
</html>