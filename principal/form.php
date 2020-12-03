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
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
    
    <div class="background">
        <div class="container">
            <?php
                if($_SESSION['msg'] == 'sim'){
                    $txt = "<fieldset style='";
                    
                    $txt = $txt . "text-align: center;";
                    $txt = $txt . "text-align: middle;";
                    $txt = $txt . "font-size: 16pt;";
                    $txt = $txt . "background-color: limegreen;";
                    $txt = $txt . "border: 1px solid black;";
                    $txt = $txt . "width: 550px;";
                    $txt = $txt . "margin: auto;";
                    $txt = $txt . "margin-bottom: 30px;";
                    $txt = $txt . "height: 50px;";
                    $txt = $txt . "border-radius: 10px;'>";

                    $txt = $txt . "MENSAGEM ENVIADA COM SUCESSO!";
                    $txt = $txt . "</fieldset>";

                    echo $txt;
                }
            ?>
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>FALE</span>
                            <span>CONOSCO</span>
                        </div>
                        <div class="app-contact">CONTATO INFO: #91 9876543210
                        </div>
                    </div>
                    <div class="screen-body-item">
                    
                    <form method="POST" action="../php/msg.php">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input type="text" class="app-form-control" name="nome" id="nome" placeholder="NOME" required="">
                                </div>

                                <div class="app-form-group">
                                    <input type="text" class="app-form-control" name="setor" id="setor" placeholder="SETOR" required="">
                                </div>

                                <div class="app-form-group">
                                    <input type="text" class="app-form-control" name="assunto" id="assunto" placeholder="ASSUNTO" required="">
                                </div>

                                <div class="app-form-group message">
                                    <input type="text" class="app-form-control" maxlength="200" name="msg" id="msg" placeholder="MENSAGEM" required="">
                                </div>

                                <div class="app-form-group buttons">
                                    <input type="button" class="app-form-button" value="VOLTAR" onclick="location.href='index.php'"></input>
                                    <input type="submit" class="app-form-button" value='ENVIAR' ></input>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>