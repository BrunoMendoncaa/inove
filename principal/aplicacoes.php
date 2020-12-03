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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .btn-solid {
        width: 100px;
        background-color: #5995fd;
        border: none;
        outline: none;
        height: 29px;
        border-radius: 49px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.5s;
        
        display: block;
        box-shadow: 5px 5px 5px black;
        }
        .btn-solid:hover{
            background-color: blue;
        }
    </style>
    
</head>
<body>
    <header>
        
    </header>
    <div class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="aplicacoes.php">Aplicações</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="sobre.php">Team</a></li>
            <li><a href="../php/sair.php">Sair</a></li>
            
        </ul>
    </div>


    <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="novos/panagon.png" alt="">
                        <h2>PESQUISA CB01'</h2>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <a style="text-align:center;padding:2px;" class="btn-solid" href="../pesquisa/index.php">ABRIR</a>
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