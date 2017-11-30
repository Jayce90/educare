<?php
session_start();

require '../controle/autenticacao.php';
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
        <script src="../layout/js/validacao_local.js"></script>
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="../layout/js/graficos/pizza.js"></script>
        <script type="text/javascript" src="../layout/js/graficos/velocidade.js"></script>

        <title>GESTOR</title>
    </head>

    <body>
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
                        <li class="active"><a class="glyphicon glyphicon-home"> Início<span class="sr-only">(current)</span></a></li>                        
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Conteudo do Body -->
            <div class="col-md-1"></div>

            <div class="col-md-10" id="box_conteudo">
                <!-- Conteudo dentro do conteudo -->
                <div class="text-center">

                    <div class="panel panel-default">                                                    
                        <div class="row">
                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-home cursor_alterado" id="afonte"><h4> ESCOLA</h4><h1>98</h1></a>
                                    
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-pencil cursor_alterado" id="afonte"><h4> SECRETÁRIO(A)</h4><h1>98</h1></a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-briefcase cursor_alterado" id="afonte"><h4> EDUCADOR(A)</h4><h1>98</h1></a>
                                </div>
                            </div>

                        </div><br>

                        <div class="row">
                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-folder-open cursor_alterado" id="afonte"><h4> DISCIPLINAS</h4><h1>98</h1></a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-book cursor_alterado" id="afonte"><h4> TURMAS</h4><h1>98</h1></a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-user cursor_alterado" id="afonte"><h4> ALUNOS</h4><h1>98</h1></a>
                                </div>
                            </div>

                        </div><br>

                        <div class="row">
                            <div class="col-md-4">
                                <div id="escolacor">
                                    <a class="glyphicon glyphicon-user cursor_alterado" id="afonte"><h4> USUÁRIOS</h4><h1>98</h1></a>
                                </div>
                            </div>

                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>

                    </div>
                </div>


            </div>

        </div>

        <div class="col-md-1"></div>

    </div>

</body>
</html>
