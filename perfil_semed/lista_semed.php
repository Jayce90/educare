<!DOCTYPE html>
<?php
session_start();

include_once '../classes/Usuario.php';

$pendentes = new Usuario();
$mostrar_pendentes = $pendentes->usuarios_pendente();
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
        <title>SECRETARIA ESCOLAR</title>
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
                        <li><a class="glyphicon glyphicon-home" href="index_semed.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_semed.php"> Cadastrar</a></li>
                        <li class="active"><a class="glyphicon glyphicon-list"> Listar<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-pencil" href="editar_semed.php"> Editar</a></li>
                        <li><a class="glyphicon glyphicon-remove" href="#"> Apagar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_escola" data-toggle="pill"> Listar Escola</a></li>
                    <li><a class="glyphicon glyphicon-book" href="#cad_turma" data-toggle="pill"> Listar Turma</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#cad_disciplina" data-toggle="pill"> Listar Disciplina</a></li>
                    <li><a class="glyphicon glyphicon-briefcase" href="#cad_professor" data-toggle="pill"> Listar Professor</a></li>
                    <li><a class="glyphicon glyphicon-user" href="#cad_aluno" data-toggle="pill"> Listar Aluno</a></li>
                    <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAR ESCOLAS</div>
                            <div class="panel-body box_conteudo">
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAR TURMAS</div>
                            <div class="panel-body box_conteudo">

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_disciplina">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAR DISCIPLINAS</div>
                            <div class="panel-body box_conteudo">

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAR PROFESSORES</div>
                            <div class="panel-body box_conteudo">

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAR ALUNOS</div>
                            <div class="panel-body box_conteudo">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
