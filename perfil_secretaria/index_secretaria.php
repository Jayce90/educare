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

        <title>SECRETARIA ESCOLAR</title>
    </head>

    <body onload="ler_feed();">
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
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_secretaria.php"> Cadastrar</a></li>
                        <li><a class="glyphicon glyphicon-pushpin" href="vincular_secretaria.php"> Vincular</a></li>
                        <li><a class="glyphicon glyphicon-list" href="lista_secretaria.php"> Listar</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Conteudo do Body -->
            <div class="col-md-2" align="center">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-target=".bs-example-modal-lg">Passo-a-passo</button><br><br>
                <a href="chat_secretaria.php">
                    <button type="button" class="btn btn-success btn-lg">Chat Suporte</button>
                </a>
            </div>
            <div class="col-md-9">
                <!-- Conteudo dentro do conteudo -->

                <div class="rolagem">
                    <div class="media_conteudo">
                        <div id="feed_geral" class="chat"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Modal passo-a-passo-->
        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header btn-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">PASSO-A-PASSO</h4>
                    </div>
                    <div class="modal-body">
                        <h3>
                            <p class="text-justify"><b>PASSO 1, CADASTRO:</b> Ao ingressar no sistema o usuário(a) deverá acessar a página de cadastro(situada no menu superior).
                                Encontra-se no lado esquerdo, todas as opções de cadastro(Aluno, Educador, Disciplina) e "Aprovar Usuário". 
                                No que diz respeito aos cadastros, os formulários seguem os padrões do Sistema Educacenso - INEP, desta maneira, basta seguir as recomendações já aplicadas. Sobre a opção "Aprovar Usuário", é mostrada a listagem de sub-usuários da escola, como professores e alunos, assim com os pais/responsavèis.
                            </p><br>
                            <p class="text-justify"><b>PASSO 2, VINCULAR:</b> Depois de efetuar todos os cadastros, chega a hora de vincular o aluno à escola.
                                O processo é bem simples, inicia com a pesquisa de três campos que devem ser selecionados: ano(atual), nível do ensino e etapa pretendida.
                                Serão listadas todas as turma que tenham campos correspondentes a pesquisa, o usuário deverá selecionar uma e será carregado todas as disciplinas cadastradas na mesma, juntamente com a listagem de todos alunos cadastrados para ser vinculado(a).
                                Devido ao fato de um educador está vinculado em mais de uma escola, se faz necessário "Lotar", criar vínculo entre ele e uma ou várias escolas. Neste formulário há 3 campos: educador à ser selecionado, ano(atual) e a carga horária total.
                            </p><br>
                            <p class="text-justify"><b>PASSO 3, LISTAR:</b> Página com a listagem de todas as turmas, educadores e disciplinas vinculadas à escola, exceto alunos, que é a lista completa de todos cadastrados no sistema.
                            </p><br>
                        </h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
