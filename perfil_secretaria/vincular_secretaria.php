<!DOCTYPE html>

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
                        <li class="active"><a class="glyphicon glyphicon-pushpin"> Vincular<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-list" href="lista_secretaria.php"> Listar</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pushpin" href="#vincular_aluno" data-toggle="pill"> Vincular Aluno</a></li>
                    <li><a class="glyphicon glyphicon-pushpin" href="#vincular_educador" data-toggle="pill"> Vincular Educador(a)</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="vincular_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">VINCULAR ALUNO</div>
                            <div class="panel-body box_conteudo">
                                <form action="" method="post">

                                    <label for="inputVincularTurma">Vincular a turma :</label><br>

                                    <select class="form-control" name="vincular_turma">
                                        <option value="">Selecione</option>                                              
                                    </select>                                        


                                    <label for="inputVincularAluno">Vincular o aluno :</label><br>

                                    <select class="form-control" name="vincular_aluno">
                                        <option value="">Selecione</option>                                             
                                    </select><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Vincular</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="vincular_educador">
                        <div class="panel panel-primary">
                            <div class="panel-heading">VINCULAR EDUCADOR</div>
                            <div class="panel-body box_conteudo">
                                <form action="" method="post">

                                    <label for="inputVincularTurmaEducador">Vincular a Turma :</label><br>

                                    <select class="form-control" name="vincular_turma_educador">
                                        <option value="">Selecione</option>                                              
                                    </select>

                                    <label for="inputVincularDisciplinaEducador">Vincular a Disciplina :</label><br>

                                    <select class="form-control" name="vincular_disciplina_educador">
                                        <option value="">Selecione</option>                                              
                                    </select>                                        


                                    <label for="inputVincularAlunoEducador">Vincular o Educador(a) :</label><br>

                                    <select class="form-control" name="vincular_aluno_educador">
                                        <option value="">Selecione</option>                                             
                                    </select><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Vincular</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
