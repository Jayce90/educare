<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/web_escola.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <title>SECRETARIA ESCOLAR</title>
    </head>

    <body>
        <div class="cabecalho">
            <div class="banner">
                <img src="../imagens/logo.png">
                <span id="titulo">WEB_ESCOLA - SEMED</span><br>
                <span id="sub-titulo">Prefeitura Municipal de Tomé-Açu</span>
            </div>
        </div>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_aluno" data-toggle="pill"> Usuário</a></li>
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_notas" data-toggle="pill"> Cadastro Notas</a></li>
                    <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_usuario">
                        <div class="panel panel-primary">
                            <div class="panel-heading">USUÁRIO</div>
                            <div class="panel-body box_conteudo">

                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="inputNomeusuario">Nome Usuário</label>
                                        <input type="text" name="cad_nome_usuario" class="form-control" id="inputNomeusuario" placeholder="digite o nome do usuario">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmailusuario">Email usuário</label>
                                        <input type="text" name="cad_email_usuario" class="form-control" id="inputEmailusuario" placeholder="digite email do usuario">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputTelefoneusuario">Telefone Usuário</label>
                                        <input type="text" name="cad_fone_usuario" class="form-control" id="inputTelefoneusuario" placeholder="digite o telefone">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputApelido">Apelido</label>
                                        <input type="text" name="cad_apelido_usuario" class="form-control" id="inputApelido" placeholder="digite o apelido">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSenha">Senha</label>
                                        <input type="password" name="cad_senha_usuario" class="form-control" id="inputSenha" placeholder="digite a senha">
                                    </div>

                                    
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo">

                                <div class="form-group">
                                    <label for="inputTurma">Nome da Turma</label>
                                    <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma">
                                </div>

                                <div class="form-group">
                                    <label for="inputFrequencia">Frequencia da turma</label>
                                    <input type="text" name="cad_frequencia_turma" class="form-control" id="inputFrequencia" placeholder="digite a frequencia da turma">
                                </div>

                                <div class="form-group">
                                    <label for="inputCodigodaturma">Codigo da turma</label>
                                    <input type="text" name="cad_codigo_turma" class="form-control" id="inputCodigodaturma" placeholder="digite o cadigo da turma">
                                </div>

                                <div class="form-group">
                                    <label for="inputEscolarizacao">Recebe escolarização em Outro espaço :</label>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_aluno" id="inputEscolarizacao" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_aluno" id="inputEscolarizacao" value="nao"> Não
                                    </label>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_notas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO NOTAS</div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </body>
</html>
