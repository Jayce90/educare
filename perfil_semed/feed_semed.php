<!DOCTYPE html>
<?php
session_start();

require '../controle/autenticacao.php';
include_once '../classes/Usuario.php';

Semed();
;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/local.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <script src="../layout/js/mascara_local.js"></script>
        <script src="../layout/js/validacao_local.js"></script>
        <script src="../js_local/ajax_local.js"></script>
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">

        <title>FEED</title>
    </head>

    <body onload="ler_feed();">
        <div class="cabecalho">
            <div class="banner">
                <div class="imagem_banner">
                    <img src="../imagens/logo.png">
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_semed.php"> Início</a></li>                        
                        <li class="active"><a class="glyphicon glyphicon-pencil"> Feed<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-comment" href="chat_semed.php"> Chat</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Conteudo do Body -->
            <div class="col-md-1"></div>
            <div class="col-md-10" id="box_conteudo">
                <form name="feedForm" id="feedForm"  action="" method="post">
                    <div class="form-group">
                        <label for="inputNomeGestorEscola">Titulo</label>
                        <input type="text" name="titulo_feed" class="form-control" id="inputNomeGestorEscola" placeholder="digite o nome" required="">
                    </div>
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="hidden" id="pertil_chat" name="pertil_feed" value="geral">
                        <textarea name="texto_feed" class="form-control" rows="3"></textarea>
                    </div>
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-lg" type="button" onclick="adicionar_feed()">Salvar Feed</button>
                    </span>
                </form>
                <hr>
                <div class="rolagem">
                    <div class="media_conteudo">
                        <div id="feed_geral" class="chat"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </body>
</html>
