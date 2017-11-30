<?php
session_start();

require '../controle/autenticacao.php';

Secretaria();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../layout/css/local.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <script src="../layout/js/mascara_local.js"></script>
        <script src="../layout/js/componente_local.js"></script>
        <script src="../js_local/ajax_local.js"></script>
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">

        <title>CHAT</title>
    </head>

    <body onload="ler_msg();">
        <div class="cabecalho">
            <div class="banner">
                <img src="../imagens/logo.png">
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_secretaria.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_secretaria.php"> Cadastrar</a></li>
                        <li><a class="glyphicon glyphicon-pushpin" href="vincular_secretaria.php"> Vincular</a></li>
                        <li><a class="glyphicon glyphicon-list" href="lista_secretaria.php"> Listar</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="rolagem">
                    <div class="media_conteudo">
                        <div id="msg_geral" class="chat"></div>
                    </div>
                </div>
                <a href="#" id="msg_enviar"></a>
                <div class="enviar-mensagem">
                    <div class="form-group form-group-lg">
                        <div class="col-sm-12">
                            <label>Mensagem</label>
                            <form name="chatForm" id="chatForm"  action="" method="post">
                                <span class="input-group-btn">
                                    
                                    <input type="hidden" id="pertil_chat" name="pertil_chat" value="geral">
                                    <textarea name="texto_chat" class="form-control" rows="3"></textarea>
                                </span>
                                <span class="input-group-btn">
                                    <button class="btn btn-success btn-lg" type="button" onclick="mensagem_chat_geral()">Enviar Mensagem</button>
                                    <button class="btn btn-info btn-lg" type="button" onclick="ler_msg()">Atualizar</button>
                                </span>
                            </form>
                        </div>

                    </div>
                </div><br>

                </body>
                </html>
