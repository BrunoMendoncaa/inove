<?php
    session_start();
    session_destroy();
    $_SESSION['cadastro'] = "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <title>Login & Inscreva-se</title>

    <!-- FONTES E ESTILOS CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="php/login.php" class="sign-in-form">
                    <h2 class="title">Login</h2>
                    <?php
                        if ($_SESSION != NULL){
                            if($_SESSION['cadastro'] == 'invalido'){
                                $txt = "";

                                $txt .= "<fieldset style='";
                                $txt .= "background-color: #FF6B6B;";
                                $txt .= "color: white;";
                                $txt .= "padding: 5px;";
                                $txt .= "margin-bottom: 5px;";
                                $txt .= "border: 1px solid black;";
                                $txt .= "border-radius: 10px;'>";
                                $txt .= "<b>Usuário já cadastrado!</b>";
                                $txt .= "</fieldset>";

                                echo $txt;
                            }elseif($_SESSION['cadastro'] == 'sucesso'){
                                $txt = "";

                                $txt .= "<fieldset style='";
                                $txt .= "background-color: #1DD1A1;";
                                $txt .= "color: white;";
                                $txt .= "padding: 5px;";
                                $txt .= "margin-bottom: 5px;";
                                $txt .= "border: 1px solid black;";
                                $txt .= "border-radius: 10px;'>";
                                $txt .= "<b>Usuário cadastrado com sucesso!</b>";
                                $txt .= "</fieldset>";
                                
                                echo $txt;
                            }elseif($_SESSION['cadastro'] == 'errado'){
                                $txt = "";

                                $txt .= "<fieldset style='";
                                $txt .= "background-color: #FF6B6B;";
                                $txt .= "color: white;";
                                $txt .= "padding: 5px;";
                                $txt .= "margin-bottom: 5px;";
                                $txt .= "border: 1px solid black;";
                                $txt .= "border-radius: 10px;'>";
                                $txt .= "<b>Usuário e/ou senha inválido(s)!</b>";
                                $txt .= "</fieldset>";
                                
                                echo $txt;
                            }
                        }
                    ?>  
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário" name="user" id="user" required=''>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="pass" id="pass" required=''>
                    </div>
                    <input type="submit" value="Login" class="btn-solid">

                </form>

                <form method="GET" action="php/cadastrar.php" class="sign-up-form">
                    <h2 class="title">Criar Usuário</h2>
        
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome" name="nome" id="nome">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário" name="user" id="user">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-desktop"></i>
                        <select required class="select-opt" name="setor" id="setor">
                            <option value="" disabled selected>Selecione o Setor</option>
                            <option value="panagon">PANAGON</option>
                            <option value="demanda">DEMANDA</option>
                            <option value="ilog">ILOG</option>
                            <option value="lanbacen">LANBACEN</option>
                            <option value="ajuizamento">AJUIZAMENTO</option>
                            <option value="inove">INOVE+</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="pass" id="pass">
                    </div>
                    <input type="submit" value="Criar Usuário" class="btn-solid">

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Inove + Technology</h3>
                    <p>Aplicação de tecnologias, regida pela lógica do négocio de dos processos estruturados. Uso de ferramentas que visam capturar e analisar informações.<hr>
                    Oque isso quer dizer? Criamos robôs que fazem tarefas administrativas !</p>
                    <button class="btn-solid" id="sign-up-btn">Criar Usuário</button>
                </div>

                <img src="img/logo.svg" class="image" alt="Imagem logo">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Junte-se</h3>
                    <p>As aplicações da Inove + são disponibilidazadas para membros devidamente autorizados. Caso já tenha um usuário acesse a plataforma.</p>
                    <button class="btn-solid" id="sign-in-btn">Login</button>
                </div>

                <img src="img/desk.svg" class="image" alt="Imagem logo">
            </div>
        </div>
    </div>

    <script src="app.js"></script>
    
</body>
</html>