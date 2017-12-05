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
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="../layout/js/graficos/pizza.js"></script>
        <script type="text/javascript" src="../layout/js/graficos/velocidade.js"></script>



        <title>SEMED</title>
    </head>

    <body>
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
                        <li class="active"><a class="glyphicon glyphicon-home"> Início<span class="sr-only">(current)</span></a></li>                        
                        <li><a class="glyphicon glyphicon-pencil" href="feed_semed.php"> Feed</a></li>
                        <li><a class="glyphicon glyphicon-comment" href="chat_semed.php"> Chat</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Conteudo do Body -->
            <div class="col-md-2" id="noprint">
                <ul class="nav nav-pills nav-stacked" id="mytabs">
                    <li class="active"><a class="glyphicon glyphicon-home" href="escola_semed.php"> ESCOLA</a></li>
                    <li><a class="glyphicon glyphicon-book" href="turma_semed.php"> TURMA</a></li>
                    <li><a class="glyphicon glyphicon-user" href="aluno_semed.php"> ALUNO(A)</a></li>
                    <li><a class="glyphicon glyphicon-briefcase" href="educador_semed.php"> EDUCADOR(A)</a></li>
                    <li><a class="glyphicon glyphicon-user" href=""> USUÁRIO(A)</a></li>                    
                </ul>
            </div>

            <div class="col-md-9" id="box_conteudo">
                <!-- Conteudo dentro do conteudo -->
                <div class="row">
                    <div class="col-md-4">
                        <div id="chart_div"></div>
                    </div>

                    <div class="col-md-6">
                        <div id="chart_div_col" style="width: 800px; height: 500px;"></div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
