<?php
    session_start();
    if($_SESSION == NULL){
        header('location: ../index.php');
    }
    echo "<p><h3>BEM-VINDO, " . $_SESSION['nome'] . "</h3></p><br>";
    //print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inove + Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <form method="POST" action="../php/sair.php">
        <input type="submit" value="sair">
    </form>
    <header>
        
    </header>
    <div class="menu">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Sobre</a></li>
            
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
                        <a href="#"><p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações. Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p></a>
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
                        <a href="#"><p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações. Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p></a>
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
                        <a href="#"><p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações. Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p></a>
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
                        <a href="#"><p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações. Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p></a>
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
                        <a href="#"><p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações. Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p></a>
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
                        <a href="#"><p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações. Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p></a>
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
                <a href="form.html"><img src="img/form-removebg-preview.png" alt=""></a>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; Inove + | Bruno Mendonca / Diego Henrique
        </div>
    </div>

</body>
</html>