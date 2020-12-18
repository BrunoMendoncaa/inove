<?php
    session_start();
    if($_SESSION == NULL){
        header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inove + Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>

    <header></header>
    <div class="menu">
    <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="aplicacoes.php">Aplicações</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="sobre.php">Team</a></li>
            <li><a href="manual.php">Manual</a></li>
            <li><a href="../php/sair.php">Sair</a></li>
            
        </ul>
    </div>


    <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/ajuizamento.png" alt="">
                        <h2>AJUIZAMENTO</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/demanda.png" alt="">
                        <h2>DEMANDA</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/ilog.png" alt="">
                        <h2>iLOG</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <ul> <h1>Manuais</h1>
                            <li><i class="fa fa-file" id="icon"></i><a href="">iLog (Crédito/Débito)</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Datas iLog</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Limpar Bobina</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Log com CPF CNPJ</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">PPRT</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Solicitação de Datas</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/ai.png" alt="">
                        <h2>INOVE +</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/lanbacen.png" alt="">
                        <h2>LANBACEN</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/panagon.png" alt="">
                        <h2>PANAGON</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <ul> <h1>Manuais</h1>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Cheque compensado</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="file:///F:/_INOVE%20+/___DIEGO/%23PROJETOS/CB01/Inove-Project-master/medias/MODELO%20LAYOUT%20PLANILHAMENTO%20DE%20DOC.pdf">DOC (Crédito/Débito)</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Liquidação de Cobrança</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="file:///F:/_INOVE%20+/___DIEGO/%23PROJETOS/CB01/Inove-Project-master/medias/MODELO%20LAYOUT%20PARA%20ROBO%20PF.pdf">Pagamento Funcionário</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="">Pagto Eletr Cobrança</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="file:///F:/_INOVE%20+/___DIEGO/%23PROJETOS/CB01/Inove-Project-master/medias/MODELO%20LAYOUT%20PARA%20ROBO%20REMETIDAS.pdf">Remetidas</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="file:///F:/_INOVE%20+/___DIEGO/%23PROJETOS/CB01/Inove-Project-master/medias/MODELO%20LAYOUT%20PLANILHAMENTO%20DE%20TED.pdf">TED (Crédito/Débito)</a></li>
                            <li><i class="fa fa-file" id="icon"></i><a href="file:///F:/_INOVE%20+/___DIEGO/%23PROJETOS/CB01/Inove-Project-master/medias/PLANILHAMENTO%20TRANSF%20CC%20e%20CP.pdf">Transf CC e CP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

     <!-- Site footer -->
     <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Inove +</span> Team</h1>
                <br>
                <p>Time especializado em produzir solução de tecnologia para área Bradesco CPI. Composto por membros que trabalham buscando as melhores maneiras de usar os recurso tecnologicos para aprimorar os processos.</p>
                <div class="contact">
                    <span><i class="fa fa-mobile" aria-hidden="true"></i>
                      &nbsp; 11 97738-9739</span>
                      <span><i class="fa fa-mobile" aria-hidden="true"></i>
                      &nbsp; 11 95953-7646</span>
                    <span><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Inove+@sbkbs.com.br</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                </div>
              </div>
            <div class="footer-section links">
                <h2>Links Utéis</h2>
                <br>
                <ul>
                    <a href="#"><li>Oficios</li></a>
                    <a href="#"><li>Team</li></a>
                    <a href="#"><li>Inove Info</li></a>
                    <a href="#"><li>Termos</li></a>
                </ul>
            </div>
            <div class="footer-section contact form">
                <h2>Contate-nos</h2>
                <br>
                <p>Contate-nos clicando no formulário:</p>
                <a href="form.php"><img src="img/form-removebg-preview.png" alt=""></a>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; Inove + | Bruno Mendonca / Diego Henrique
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>
</html>