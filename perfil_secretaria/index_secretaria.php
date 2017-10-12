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
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_aluno" data-toggle="pill"> Cadastro Aluno</a></li>
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_notas" data-toggle="pill"> Cadastro Notas</a></li>
                    <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DE ALUNO</div>
                            <div class="panel-body box_conteudo">

                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="inputId">Identificação Unica</label>
                                        <input type="text" name="cad_id_aluno" class="form-control" id="inputId" placeholder="digite a identificação unica">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNome">Nome do aluno</label>
                                        <input type="text" name="cad_nome_aluno" class="form-control" id="inputNome" placeholder="digite nome do aluno">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputIdade">Idade</label>
                                                <input type="text" name="cad_idade_aluno" class="form-control" id="inputIdade" placeholder="digite a idade">
                                            </div> 

                                        </div>
                                        <div class="col-xs-6 col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimento">Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimento" placeholder="digite a data de nascimento">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexo">Sexo :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexo" value="masculino"> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexo" value="feminino"> Feminino
                                                </label>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputNIS">Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNIS" placeholder="digite o NIS">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputraca">Cor/Raça :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="branca"> Branca
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="preta"> Preta
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="parda"> Parda
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="amarela"> Amarela
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="indigena"> Indígena
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="naodeclarada"> Não Declarada
                                                </label>

                                            </div>   

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMae">Nome da mãe</label>
                                        <input type="text" name="cad_mae_aluno" class="form-control" id="inputMae" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPai">Nome do pai</label>
                                        <input type="text" name="cad_pai_aluno" class="form-control" id="inputPai" placeholder="digite nome do pai">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputnacionalidade">Nacionalidade do aluno :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputnacionalidade" value="brasileira"> Brasileiro
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputnacionalidade" value="naturalizado"> Naturalizado
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputnacionalidade" value="extrangeiro"> Extrangeiro
                                        </label>



                                    </div>

                                    <div class="form-group">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEndereco" placeholder="digite o endereco">

                                        <div class="form-group">
                                            <label for="inputnecessidadeespecial">Necessidade Especial :</label>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_especial_aluno" id="inputnecessidadeespecial" value="sim"> Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_especial_aluno" id="inputnecessidadeespecial" value="nao"> Não
                                            </label>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label for="inputCertidao">Certidão de Nascimento :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_certidao_aluno" id="inputCertidao" value="sim"> Sim
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_certidao_aluno" id="inputCertidao" value="nao"> Não
                                        </label>

                                    </div>


                                    <div class="form-group">
                                        <label for="inputSerie">Serie</label>
                                        <input type="text" name="cad_serie_aluno" class="form-control" id="inputSerie" placeholder="digite a serie">
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="inputTransporteescolar">Transporte Escolar :</label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_transporte_aluno" id="inputTransporteescolar" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_transporte_aluno" id="inputTransporteescolar" value="nao"> Não
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="inputRepetente">Repetente :</label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_repetente_aluno" id="inputRepetente" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_repetente_aluno" id="inputRepetente" value="nao"> Não
                                                </label>

                                            </div>

                                        </div>
                                    </div>






                                    <div class="form-group">
                                        <label for="inputProcedencia">Procedencia</label>
                                        <input type="text" name="cad_procedencia_aluno" class="form-control" id="inputProcedencia" placeholder="procedencia">
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
