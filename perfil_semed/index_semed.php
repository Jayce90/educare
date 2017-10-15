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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo">

                                <form action="" method="post">


                                    <div class="form-group">
                                        <label for="inputTurma">Nome da Turma</label>
                                        <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputiniciofuncionamento">Horário de funcionamento Inicio</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="horário inicio">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="horário final">
                                            </div>

                                        </div>
                                    </div>

                                    <label for="inputDiassemana">Dias da semana da turma :</label><br>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="segunda"> Segunda
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="terca"> Terça
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="quarta"> Quarta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="quinta"> Quinta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="sexta"> Sexta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="sabado"> Sábado
                                    </label><br><br>


                                    <label for="inputAtendimento">Tipo de atendimento :</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_atendimento_turma" id="inputAtendimento" value="hospitalar"> Classe hospitalar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_atendimento_turma" id="inputAtendimento" value="internacaosocioeducativa"> Unidade de internação socioeducativa
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_atendimento_turma" id="inputAtendimento" value="unidadeprisional"> Unidade prisional
                                    </label>                                      
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_atendimento_turma" id="inputAtendimento" value="atividadecomplementar"> Atividade complementar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_atendimento_turma" id="inputAtendimento" value="aee"> Atendimento educacional especializado (AEE)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_atendimento_turma" id="inputAtendimento" value="naoseaplica"> Não se aplica
                                    </label>

                                    <label for="inputMaiseducacao">Turma participante do programa mais educação/Ensino médio inovador :</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_maiseducacao_turma" id="inputMaiseducacao" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_maiseducacao_turma" id="inputMaiseducacao" value="nao"> Não
                                    </label>


                                    <div class="form-group">
                                        <label for="inputAeeatividades">Atividades do atendimento educacional especializado (AEE) :</label><br>


                                        <div class="row">
                                            <div class="col-md-6">

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="braile"> Ensino do sistema braile
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="libras"> Ensino da língua brasileira de sinais (libras)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="informáticaacessivel"> Ensino da usabilidade e das funcionalidades de informática acessível
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="opticosenaoopticos"> Ensino do uso de recursos ópticos e não ópticos
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="caa"> Ensino do uso da comunicação alternativa e aumentativa (CAA)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="lportuguesaescrita"> Ensino da língua portuguesa na modalidade escrita
                                                </label>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="processosmentais"> Estratégias para o desenvolvimento de processos mentais
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="enriquecimentocurricular"> Estratégias para o emriquecimento curricular
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="autonomiaescolar"> Estratégias para autonomia no ambiente escolar
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="orientaaoemobilidade"> Técnicas de orientação e mobilidade
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="soroban"> Ensino do uso do Soroban
                                                </label>

                                            </div>
                                        </div>




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

                                </form><br>

                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

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
