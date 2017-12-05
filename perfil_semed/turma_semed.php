<?php
session_start();

require '../controle/autenticacao.php';
include_once '../classes/Usuario.php';
include_once '../classes/Disciplina.php';
include_once '../classes/Escola.php';

Semed();

$escola = new Escola();
$mostrar_escola = $escola->ler_todos_org();

$id_escola = $_SESSION['id_escola'];

$pendentes = new Usuario();
$mostrar_pendentes = $pendentes->usuarios_pendente_geral();

$dados_disciplina = new Disciplina();
$mostrar_dados_disciplina = $dados_disciplina->ler_professor_turma($_SESSION['id_escola']);
?>

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
        <title>TURMA</title>
    </head>

    <body>
        <div class="cabecalho" id="noprint">
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
                        <li><a class="glyphicon glyphicon-home" href="index_semed.php"> Início<span class="sr-only">(current)</span></a></li>                        
                        <li><a class="glyphicon glyphicon-pencil" href="feed_semed.php"> Feed</a></li>
                        <li><a class="glyphicon glyphicon-comment" href="chat_semed.php"> Chat</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Navigation Buttons -->
            <div class="col-md-2" id="noprint">
                <ul class="nav nav-pills nav-stacked menu" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_turma" data-toggle="pill"> Cadastrar</a></li>
                    <li><a class="glyphicon glyphicon-edit" href="#editar_turma" data-toggle="pill"> Editar</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#lista_turma" data-toggle="pill"> Listar</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#" data-toggle="pill"> Documentos</a>
                        <ul>
                            <li><a class="glyphicon glyphicon-file" href="#boletim_turma" data-toggle="pill"> Boletim</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#relatorio_final_turma" data-toggle="pill"> Relatório Final</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#mapao_turma" data-toggle="pill"> Mapa Informativo</a></li>
                        </ul>
                    </li>
                    <li><a class="glyphicon glyphicon-ban-circle" href="#desabilitar_turma" data-toggle="pill"> Desabilitar</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading" id="noprint">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form action="../controle/cadastrando_turma.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTurma">1. Nome da Turma</label>
                                                <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma" required="">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputCapacidadeTurma">2. Número de alunos</label>
                                                <input type="text" name="cad_capacidade_turma" class="form-control" id="inputCapacidadeTurma" placeholder="digite capacidade da turma">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputMaiseducacao">3. Ano da turma</label><br>

                                            <select class="form-control" name="cad_ano_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="2017">2017</option>                                               
                                                <option selected="" value="2018">2018</option>                                        
                                                <option value="2019">2019</option>                                        
                                                <option value="2020">2020</option>                                        
                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputiniciofuncionamento">4. Horário de funcionamento Inicio</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">4. Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTurno">4a. Turno</label><br>

                                            <select class="form-control" name="cad_turno_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Manhã">Manhã</option>                                               
                                                <option value="Tarde">Tarde</option>                                        
                                                <option value="Noite">Noite</option>                                        
                                                <option value="Intermediário">Intermediário</option>                                        
                                                <option value="Integral">Integral</option>                                        
                                            </select>
                                        </div>
                                    </div>


                                    <label for="inputDiassemana">5. Dias da semana da turma</label><br>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="segunda, terça, quarta, quinta e sexta" checked=""> Segunda a Sexta
                                    </label>
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


                                    <label for="inputAtendimento">6. Tipo de atendimento</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Classe Hospitalar"> Classe Hospitalar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Unidade de Internação Socioeducativa"> Unidade de Internação Socioeducativa
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Unidade Prisional"> Unidade Prisional
                                    </label>                                      
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Atividade Complementar"> Atividade Complementar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Atendimento Educacional Especializado (AEE)"> Atendimento Educacional Especializado (AEE)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Não se Aplica"> Não se Aplica
                                    </label><br>

                                    <label for="inputMaiseducacao">7. Turma participante do programa mais educação/Ensino médio inovador</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="Sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="Não" checked=""> Não
                                    </label><br><br>


                                    <div class="form-group">
                                        <label for="inputAeeatividades">8. Atividades do atendimento educacional especializado (AEE)</label><br>


                                        <div class="row">
                                            <div class="col-md-6">

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do sistema braile"> Ensino do sistema braile
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da língua brasileira de sinais (libras)"> Ensino da língua brasileira de sinais (libras)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da usabilidade e das funcionalidades"> Ensino da usabilidade e das funcionalidades de informática acessível
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso de recursos ópticos e não ópticos"> Ensino do uso de recursos ópticos e não ópticos
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso da comunicação alternativa e aumentativa (CAA)"> Ensino do uso da comunicação alternativa e aumentativa (CAA)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da língua portuguesa na modalidade escrita"> Ensino da língua portuguesa na modalidade escrita
                                                </label>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para o desenvolvimento de processos mentais"> Estratégias para o desenvolvimento de processos mentais
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para o enriquecimento curricular"> Estratégias para o enriquecimento curricular
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para autonomia no ambiente escolar"> Estratégias para autonomia no ambiente escolar
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Técnicas de orientação e mobilidade"> Técnicas de orientação e mobilidade
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso do Soroban"> Ensino do uso do Soroban
                                                </label>

                                            </div>
                                        </div>
                                    </div><br>


                                    <label for="inputModalidade">9. Modalidade</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Ensino Regular"> Ensino Regular
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Educação Especial - Modalidade Substitutiva"> Educação Especial - Modalidade Substitutiva
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Educação de Jovens e Adultos (EJA)"> Educação de Jovens e Adultos (EJA)
                                    </label><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputNivel">10. Nivel de ensino</label><br>

                                            <select class="form-control" name="cad_nivel_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Educação Infantil">Educação Infantil</option>                                               
                                                <option value="Ensino Fundamental">Ensino Fundamental</option>                                        
                                                <option value="EJA">EJA</option>                                         
                                            </select>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputEtapa">10a. Etapa</label><br>

                                            <select class="form-control" name="cad_etapa_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Creche 2">Creche 2</option>                                               
                                                <option value="Creche 3">Creche 3</option>                                               
                                                <option value="Pré - Escola 1">Pré - Escola 1</option>                                        
                                                <option value="Pré - Escola 2">Pré - Escola 2</option>                                        
                                                <option value="1º ano">1º ano</option>                                        
                                                <option value="2º ano">2º ano</option>                                        
                                                <option value="3º ano">3º ano</option>                                        
                                                <option value="4º ano">4º ano</option>                                        
                                                <option value="5º ano">5º ano</option>                                        
                                                <option value="6º ano">6º ano</option>                                        
                                                <option value="7º ano">7º ano</option>                                        
                                                <option value="8º ano">8º ano</option>                                        
                                                <option value="9º ano">9º ano</option>                                        
                                                <option value="EJA - Ensino Fundamental anos iniciais">EJA - Ensino Fundamental anos iniciais</option>                                        
                                                <option value="EJA - Ensino Fundamental anos finais">EJA - Ensino Fundamental anos finais</option>                                        
                                                <option value="EJA - Ensino Fundamental anos iniciais e anos finais">EJA - Ensino Fundamental anos iniciais e anos finais</option>                                        
                                                <option value="EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)">EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)</option>                                      
                                            </select>
                                        </div>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="inputVincularTurmaEducador">11. Escola:</label><br>

                                        <select class="form-control" name="cad_id_escola_turma">
                                            <?php
                                            foreach ($mostrar_escola as $linha_escola) {
                                                echo "<option value='" . $linha_escola->id_escola . "'>" . $linha_escola->nome_escola . "</option>";
                                            }
                                            ?>                                              
                                        </select>
                                    </div>

                                    <label for="inputDescricaodaturma">12. Descrição da turma</label><br>
                                    <textarea class="form-control" name="cad_descricao_turma" rows="6"></textarea><br>

                                    <button type="submit" class="btn btn-primary btn-lg" id="noprint">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="editar_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading"id="noprint">EDITAR</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTurma">1. Nome da Turma</label>
                                                <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma" required="">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputCapacidadeTurma">2. Número de alunos</label>
                                                <input type="text" name="cad_capacidade_turma" class="form-control" id="inputCapacidadeTurma" placeholder="digite capacidade da turma">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputMaiseducacao">3. Ano da turma</label><br>

                                            <select class="form-control" name="cad_ano_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="2017">2017</option>                                               
                                                <option selected="" value="2018">2018</option>                                        
                                                <option value="2019">2019</option>                                        
                                                <option value="2020">2020</option>                                        
                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputiniciofuncionamento">4. Horário de funcionamento Inicio</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">4. Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTurno">4a. Turno</label><br>

                                            <select class="form-control" name="cad_turno_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Manhã">Manhã</option>                                               
                                                <option value="Tarde">Tarde</option>                                        
                                                <option value="Noite">Noite</option>                                        
                                                <option value="Intermediário">Intermediário</option>                                        
                                                <option value="Integral">Integral</option>                                        
                                            </select>
                                        </div>
                                    </div>


                                    <label for="inputDiassemana">5. Dias da semana da turma</label><br>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="segunda, terça, quarta, quinta e sexta" checked=""> Segunda a Sexta
                                    </label>
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


                                    <label for="inputAtendimento">6. Tipo de atendimento</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Classe Hospitalar"> Classe Hospitalar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Unidade de Internação Socioeducativa"> Unidade de Internação Socioeducativa
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Unidade Prisional"> Unidade Prisional
                                    </label>                                      
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Atividade Complementar"> Atividade Complementar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Atendimento Educacional Especializado (AEE)"> Atendimento Educacional Especializado (AEE)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Não se Aplica"> Não se Aplica
                                    </label><br>

                                    <label for="inputMaiseducacao">7. Turma participante do programa mais educação/Ensino médio inovador</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="Sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="Não" checked=""> Não
                                    </label><br><br>


                                    <div class="form-group">
                                        <label for="inputAeeatividades">8. Atividades do atendimento educacional especializado (AEE)</label><br>


                                        <div class="row">
                                            <div class="col-md-6">

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do sistema braile"> Ensino do sistema braile
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da língua brasileira de sinais (libras)"> Ensino da língua brasileira de sinais (libras)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da usabilidade e das funcionalidades"> Ensino da usabilidade e das funcionalidades de informática acessível
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso de recursos ópticos e não ópticos"> Ensino do uso de recursos ópticos e não ópticos
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso da comunicação alternativa e aumentativa (CAA)"> Ensino do uso da comunicação alternativa e aumentativa (CAA)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da língua portuguesa na modalidade escrita"> Ensino da língua portuguesa na modalidade escrita
                                                </label>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para o desenvolvimento de processos mentais"> Estratégias para o desenvolvimento de processos mentais
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para o enriquecimento curricular"> Estratégias para o enriquecimento curricular
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para autonomia no ambiente escolar"> Estratégias para autonomia no ambiente escolar
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Técnicas de orientação e mobilidade"> Técnicas de orientação e mobilidade
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso do Soroban"> Ensino do uso do Soroban
                                                </label>

                                            </div>
                                        </div>
                                    </div><br>


                                    <label for="inputModalidade">9. Modalidade</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Ensino Regular"> Ensino Regular
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Educação Especial - Modalidade Substitutiva"> Educação Especial - Modalidade Substitutiva
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Educação de Jovens e Adultos (EJA)"> Educação de Jovens e Adultos (EJA)
                                    </label><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputNivel">10. Nivel de ensino</label><br>

                                            <select class="form-control" name="cad_nivel_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Educação Infantil">Educação Infantil</option>                                               
                                                <option value="Ensino Fundamental">Ensino Fundamental</option>                                        
                                                <option value="EJA">EJA</option>                                         
                                            </select>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputEtapa">10a. Etapa</label><br>

                                            <select class="form-control" name="cad_etapa_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Creche 2">Creche 2</option>                                               
                                                <option value="Creche 3">Creche 3</option>                                               
                                                <option value="Pré - Escola 1">Pré - Escola 1</option>                                        
                                                <option value="Pré - Escola 2">Pré - Escola 2</option>                                        
                                                <option value="1º ano">1º ano</option>                                        
                                                <option value="2º ano">2º ano</option>                                        
                                                <option value="3º ano">3º ano</option>                                        
                                                <option value="4º ano">4º ano</option>                                        
                                                <option value="5º ano">5º ano</option>                                        
                                                <option value="6º ano">6º ano</option>                                        
                                                <option value="7º ano">7º ano</option>                                        
                                                <option value="8º ano">8º ano</option>                                        
                                                <option value="9º ano">9º ano</option>                                        
                                                <option value="EJA - Ensino Fundamental anos iniciais">EJA - Ensino Fundamental anos iniciais</option>                                        
                                                <option value="EJA - Ensino Fundamental anos finais">EJA - Ensino Fundamental anos finais</option>                                        
                                                <option value="EJA - Ensino Fundamental anos iniciais e anos finais">EJA - Ensino Fundamental anos iniciais e anos finais</option>                                        
                                                <option value="EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)">EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)</option>                                      
                                            </select>
                                        </div>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="inputVincularTurmaEducador">11. Escola:</label><br>

                                        <select class="form-control" name="cad_id_escola_turma">
                                            <?php
                                            foreach ($mostrar_escola as $linha_escola) {
                                                echo "<option value='" . $linha_escola->id_escola . "'>" . $linha_escola->nome_escola . "</option>";
                                            }
                                            ?>                                              
                                        </select>
                                    </div>

                                    <label for="inputDescricaodaturma">12. Descrição da turma</label><br>
                                    <textarea class="form-control" name="cad_descricao_turma" rows="6"></textarea><br>

                                    <button type="submit" class="btn btn-primary btn-lg" id="noprint">Editar</button>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="lista_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAS</div>
                            <div class="panel-body box_conteudo">

                                <div class="row">
                                    <!-- Conteudo do Body -->
                                    <div class="col-md-1"></div>

                                    <div class="col-md-10" id="box_conteudo">
                                        <!-- Conteudo dentro do conteudo -->
                                        <div class="text-center">

                                            <div class="panel panel-default">                                                    
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-home cursor_alterado" id="listafonte"><h4> ESCOLA</h4></a>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-pencil cursor_alterado" id="listafonte"><h4> SECRETÁRIO(A)</h4></a>
                                                        </div>
                                                    </div>                                                    

                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-folder-open cursor_alterado" id="listafonte"><h4> DISCIPLINAS</h4></a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-briefcase cursor_alterado" id="listafonte"><h4> EDUCADOR(A)</h4></a>
                                                        </div>
                                                    </div>

                                                </div><br>                                                

                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="boletim_turma">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">BOLETIM</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h6><b>Resolução nº. 469/2009 CEE – Regimento Unificado</b></h6></span><br>


                                        <h3><b>BOLETIM ESCOLAR - ANO LETIVO "****"</b></h3><br>

                                    </div>

                                    <p class="text-justify"><h5><b>Escola Municipal de Ensino Infantil e Fundamental “________________”  INEP:_______ <br><br> 
                                            Aluno (a): __________________  Nascimento: ___/___/______ <br><br>
                                            Curso:___________ Regime: Ano _________<br><br>
                                            Turma: ________  Ano/Série/Etapa: ___________ Sexo: ____ Turno: _______<br><br>
                                        </b></h5></p>


                                    <table class="table table-bordered">

                                        <tr>
                                            <th>DISCIPLINAS</th>
                                            <th>1ª AV.</th>                    
                                            <th>2ª AV.</th>
                                            <th>3ª AV.</th>
                                            <th>4ª AV.</th>
                                            <th>MÉDIA ANUAL</th>                
                                            <th>RESULTADO</th>                
                                        </tr>

                                        <tr>

                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>          

                                    </table>

                                    <table class="table table-bordered">

                                        <tr>
                                            <th>FREQUÊNCIA ANUAL :</th>
                                            <th>RESULTADO FINAL :</th>                    
                                        </tr>

                                        <tr>

                                            <td>FÓRMULA - PESO 6 - REGIME DE ANO<br>
                                                1. O aluno terá 4 Avaliações bimestrais;<br>
                                                2. A nota minima de aprovação é 6.0;<br>
                                                3. Exigência de 75% de frequência anual do aluno;<br>
                                                4. Serão oferecidas 2 recuperações semestrais;<br>
                                                a) 1º Semestre em todas as disciplinas onde o aluno não obtiver 18 pontos;<br>
                                                b) 2º Semestre somente em 4 discipinas onde o aluno não obtiver 60 pontos;<br>
                                                FÓRMULA PARA CÁLCULO DA MÉDIA ANUAL<br>
                                                MA=(1Av. x 1)+(2Av. x 2)+(3Av. x 3)+(4Av. x 4) = 60 / 10 = 6.0               

                                            </td>
                                            <td>
                                                FÓRMULA - PESO 6 - REGIME DE ANO<br>
                                                1. O aluno terá 4 Avaliações bimestrais;<br>
                                                2. A nota minima de aprovação é 5.0;<br>
                                                3. Exigência de 75% de frequência anual do aluno;<br>
                                                4. Serão oferecidas 2 recuperações semestrais;<br>
                                                a) 1º Semestre em todas as disciplinas onde o aluno não obtiver 15 pontos;<br>
                                                b) 2º Semestre somente em 4 discipinas onde o aluno não obtiver 50 pontos;<br>
                                                FÓRMULA PARA CÁLCULO DA MÉDIA ANUAL<br>
                                                MA=(1Av. x 2)+(2Av. x 3)+(3Av. x 2)+(4Av. x 3) = 50 / 10 = 5.0

                                            </td>

                                        </tr>          

                                    </table>


                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    EDUCADOR(A): __________________________</p><br>


                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="relatorio_final_turma">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">RELATÓRIO FINAL</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>
                                    <div class="text-justify">
                                        <p>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</p>

                                        <p>ESCOLA MUNICIPAL DE ENSINO FUNDAMENTAL _________________________</p>   

                                        <p>NIVEL DE ENSINO:_________ ENSINO FUNDAMENTAL - ANOS FINAIS: __________<br> MÉDIA DE APROVAÇÃO: _______</p>

                                        <p>ANO:_______ TURMA: ________ TURNO: _______ ANO:________</p>
                                    </div>

                                    <div class="tituloboletim">

                                        <h3><b>RELATÓRIO DE RESULTADO FINAL</b></h3>

                                    </div>



                                    <table class="table table-bordered">

                                        <tr>
                                            <th>Nº</th>
                                            <th>Nome do Aluno(a)</th>                    
                                            <th>Língua Portuguesa</th>
                                            <th>História</th>
                                            <th>Geografia</th>
                                            <th>Ciências</th>
                                            <th>Matemática</th>
                                            <th>Ensino Religioso</th>
                                            <th>Artes</th>
                                            <th>Educação Física</th>
                                            <th>Inglês</th>
                                            <th>Estudos Amazônicos</th>
                                            <th>Observação</th>
                                        </tr>

                                        <tr>
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     

                                        </tr>

                                    </table>

                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: _______________    SECRETÁRIO(A): _______________</p>

                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="mapao_turma">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">MAPA INFORMATIVO</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidasmapao">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-center">  

                                                <img class="tomeacu" src="../imagens/tomeacu.png" alt="brasao">   

                                            </div>

                                        </div>


                                        <div class="col-md-4">

                                            <span class="prefeitura">PREFEITURA MUNICIPAL DE TOMÉ-AÇU</span><br>

                                            <span class="semed">SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</span><br>

                                            <span class="mapa">MAPA INFORMATIVO DE AVALIAÇÕES</span>

                                        </div>

                                        <div class="col-md-3">

                                            <label>Unidade Escolar:</label><br>           

                                            <label>Diretoria:</label><br>               

                                            <label>Professor(a):</label><br>              

                                            <label>Ano:</label><br>            

                                        </div>

                                        <div class="col-md-3">

                                            <label>Media Anual:</label><br>           

                                            <label>Localidade:</label><br>               

                                            <label>Etapa:</label><br>              

                                            <label>Polo:</label><br>

                                        </div>

                                    </div>

                                    <table class="table table-bordered">

                                        <tr>
                                            <th rowspan="2">Nº</th>
                                            <th rowspan="2">Nome do Aluno(a)</th>
                                            <th rowspan="2">Sexo</th>
                                            <th colspan="8">Artes</th>
                                            <th colspan="8">Ciências</th>
                                            <th colspan="8">Educação Física</th>
                                            <th colspan="8">Geografia</th>
                                            <th colspan="8">História</th>
                                            <th colspan="8">Inglês</th>
                                            <th colspan="8">Língua Portuguesa</th>
                                            <th colspan="8">Matemática</th>
                                            <th rowspan="2">Observação</th>
                                        </tr>

                                        <tr>
                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                    </table>

                                    <div class="row" id="fonte">

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            SECRETÁRIO(A)

                                        </div>

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            DIRETOR(A)

                                        </div>

                                    </div><br>

                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="desabilitar_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">DESABILITAR</div>
                            <div class="panel-body box_conteudo">

                                <label for="inputDesabilitarTurma">Desabilitar Turma</label>
                                <input type="text" class="form-control" id="inputDesabilitarTurma" placeholder="digite o nome da turma"><br>

                                <button type="submit" class="btn btn-danger btn-lg">Desabilitar</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
