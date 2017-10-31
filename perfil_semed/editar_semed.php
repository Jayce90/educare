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
                        <li><a class="glyphicon glyphicon-list" href="lista_semed.php"> Listar</a></li>
                        <li class="active"><a class="glyphicon glyphicon-pencil"> Editar<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-remove" href="#"> Apagar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_escola" data-toggle="pill"> Cadastro Escola</a></li>
                    <li><a class="glyphicon glyphicon-book" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#cad_disciplina" data-toggle="pill"> Cadastro Disciplina</a></li>
                    <li><a class="glyphicon glyphicon-briefcase" href="#cad_professor" data-toggle="pill"> Cadastro Professor</a></li>
                    <li><a class="glyphicon glyphicon-user" href="#cad_aluno" data-toggle="pill"> Cadastro Aluno</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#aprovacao" data-toggle="pill"> Aprovar Usuário</a></li>
                    <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA ESCOLA</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_escola.php" method="post">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputIdEscola">1. INEP</label>
                                                <input type="text" name="cad_inep_escola" class="form-control" id="inputIdEscola" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputCpfGestorEscola">2. Número do CPF do Gestor Escolar</label>
                                                <input type="text" name="cad_cpf_gestor_escola" class="form-control" id="inputCpfGestorEscola" placeholder="CPF gestor escolar" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputNomeGestorEscola">3. Nome do Gestor Escolar</label>
                                    <input type="text" name="cad_nome_gestor_escola" class="form-control" id="inputNomeGestorEscola" placeholder="digite o nome"><br>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputCargoGestorEscola">4. Cargo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_cargo_gestor_escola" id="inputCargoGestorEscola" value="diretor"> Diretor
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_cargo_gestor_escola" id="inputCargoGestorEscola" value="outro cargo"> Outro cargo
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="inputEmailGestorEscola">5. Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_gestor_escola" class="form-control" id="inputEmailGestorEscola" placeholder="digite o Email">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputFuncionamentoEscola">6. Situação de funcionamento</label>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Em atividade"> Em atividade
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Paralisada"> Paralisada
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Extinta"> Extinta
                                            </label>
                                        </div>
                                    </div>

                                    <label for="inputNomeEscola">7. Nome da escola</label>
                                    <input type="text" name="cad_nome_escola" class="form-control" id="inputNomeEscola" placeholder="nome da escola"><br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputCepEscola">8. CEP</label>
                                                <input type="text" name="cad_cep_escola" class="form-control" id="inputCepEscola" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputPoloEscola">9. Polo</label>

                                                <select class="form-control" name="cad_polo_escola">
                                                    <option value="">Selecione</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputDistritoEscola">10. Distrito</label>
                                                <input type="text" name="cad_distrito_escola" class="form-control" id="inputDistritoEscola" placeholder="digite o Distrito">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputEnderecoEscola">11. Endereço</label>
                                                <input type="text" name="cad_endereco_escola" class="form-control" id="inputEnderecoEscola" placeholder="digite o endereço">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputNumeroEscola">12. Número</label>
                                                <input type="text" name="cad_numero_escola" class="form-control" id="inputNumeroEscola" placeholder="digite o numero" onkeypress="return SomenteNumero(event);">
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoEscola">13. Complemento</label>
                                                <input type="text" name="cad_complemento_endereco_escola" class="form-control" id="inputComplementoEnderecoEscola" placeholder="digite o complemento">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputBairroEscola">14. Bairro</label>
                                                <input type="text" name="cad_bairro_escola" class="form-control" id="inputBairroEscola" placeholder="digite o bairro">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputFoneEscola">15. Telefone</label>
                                                <input type="text" name="cad_fone_escola" class="form-control" id="inputFoneEscola" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputOutroFoneEscola">16. Outro telefone</label>
                                                <input type="text" name="cad_outro_fone_escola" class="form-control" id="inputOutroFoneEscola" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmailEscola">17. Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_escola" class="form-control" id="inputEmailEscola" placeholder="digite o email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputLocalizacaoescola">18. Localização/Zona da escola</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_escola" id="inputLocalizacaoescola" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_escola" id="inputLocalizacaoescola" value="rural"> Rural
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputRegulamentacaoEscola">19. Autorização no conselho ou órgão municipal, estadual ou federal de educação</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola" id="inputRegulamentacaoEscola" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola" id="inputRegulamentacaoEscola" value="Em tramitação"> Em tramitação
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola" id="inputRegulamentacaoEscola" value="nao"> Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAutorizacaoEscola">20. Autorização para emitir/assinar documentos</label><br>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_autorizacao_escola" id="inputAutorizacaoEscola" value="sim"> Sim
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_autorizacao_escola" id="inputAutorizacaoEscola" value="não"> Não
                                        </label>

                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_turma.php" method="post">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputTurma">1. Nome da Turma</label>
                                                <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputMaiseducacao">2. Ano da turma</label><br>

                                            <select class="form-control" name="cad_ano_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="2017">2017</option>                                               
                                                <option value="2018">2018</option>                                        
                                                <option value="2019">2019</option>                                        
                                                <option value="2020">2020</option>                                        
                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputiniciofuncionamento">3. Horário de funcionamento Inicio</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">3. Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTurno">3a. Turno</label><br>

                                            <select class="form-control" name="cad_turno_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="manha">Manhã</option>                                               
                                                <option value="tarde">Tarde</option>                                        
                                                <option value="noite">Noite</option>                                        
                                                <option value="intermediario">Intermediário</option>                                        
                                                <option value="integral">Integral</option>                                        
                                            </select>
                                        </div>
                                    </div>


                                    <label for="inputDiassemana">4. Dias da semana da turma</label><br>

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


                                    <label for="inputAtendimento">5. Tipo de atendimento</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="hospitalar"> Classe hospitalar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="internacaosocioeducativa"> Unidade de internação socioeducativa
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="unidadeprisional"> Unidade prisional
                                    </label>                                      
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="atividadecomplementar"> Atividade complementar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="aee"> Atendimento educacional especializado (AEE)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="naoseaplica"> Não se aplica
                                    </label><br>

                                    <label for="inputMaiseducacao">6. Turma participante do programa mais educação/Ensino médio inovador</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="nao"> Não
                                    </label><br><br>


                                    <div class="form-group">
                                        <label for="inputAeeatividades">7. Atividades do atendimento educacional especializado (AEE)</label><br>


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
                                    </div><br>


                                    <label for="inputModalidade">8. Modalidade</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="EnsinoRegular"> Ensino Regular
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="EducaçãoEspecial"> Educação Especial - Modalidade Substitutiva
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="EJA"> Educação de Jovens e Adultos (EJA)
                                    </label><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputNivel">9. Nivel de ensino</label><br>

                                            <select class="form-control" name="cad_nivel_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="infantil">Educação Infantil</option>                                               
                                                <option value="Fundamental">Ensino Fundamental</option>                                        
                                                <option value="Eja">EJA</option>                                        
                                            </select>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputEtapa">9a. Etapa</label><br>

                                            <select class="form-control" name="cad_etapa_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Creche 2">Creche 2</option>                                               
                                                <option value="Creche 3">Creche 3</option>                                               
                                                <option value="preescola 1">Pré - Escola 1</option>                                        
                                                <option value="preescola 2">Pré - Escola 2</option>                                        
                                                <option value="1º ano">1º ano</option>                                        
                                                <option value="2º ano">2º ano</option>                                        
                                                <option value="3º ano">3º ano</option>                                        
                                                <option value="4º ano">4º ano</option>                                        
                                                <option value="5º ano">5º ano</option>                                        
                                                <option value="6º ano">6º ano</option>                                        
                                                <option value="7º ano">7º ano</option>                                        
                                                <option value="8º ano">8º ano</option>                                        
                                                <option value="9º ano">9º ano</option>                                        
                                                <option value="fundamentalInicial">EJA - Ensino Fundamental
                                                    anos iniciais</option>                                        
                                                <option value="fundamentalFinal">EJA - Ensino Fundamental
                                                    anos finais</option>                                        
                                                <option value="fundamentalInicialeFinal">EJA - Ensino Fundamental
                                                    anos iniciais e anos finais</option>                                        
                                                <option value="fic">EJA - EJA integrada à Educação
                                                    Profissional de Nível Fundamental (FIC)</option>                                        
                                                <option value="urbano">EJA - Ensino Fundamental -
                                                    Projovem (Urbano)</option>                                        
                                                <option value="ensinomedio">EJA - Ensino Médio</option>                                        
                                                <option value="profissionalmedio">EJA integrada à Educação
                                                    Profissional de Nível Médio</option>                                        
                                            </select>
                                        </div>
                                    </div><br>

                                    <label for="inputDescricaodaturma">10. Descrição da turma</label><br>
                                    <textarea class="form-control" name="cad_descricao_turma" rows="6"></textarea><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_disciplina">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DE DISCIPLINA</div>
                            <div class="panel-body">
                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputNomeDisciplina">1. Nome da disciplina</label>
                                            <input type="text" name="cad_nome_disciplina" class="form-control" id="inputNomeDisciplina" placeholder="nome da disciplina">
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputCargaHorariaDisciplina">2. Carga Horária</label>
                                            <input type="text" name="cad_carga_horaria_disciplina" class="form-control" id="inputCargaHorariaDisciplina" placeholder="carga horária">                                            
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputNivelDisciplina">3. Nivel da disciplina</label><br>

                                            <select class="form-control" name="cad_nivel_disciplina">
                                                <option value="">Selecione</option>                                               
                                                <option value="infantil">Educação Infantil</option>                                               
                                                <option value="Fundamental">Ensino Fundamental</option>                                        
                                                <option value="Eja">EJA</option>                                        
                                            </select>                                             
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputEtapaDisciplina">4. Etapa da disciplina</label><br>

                                            <select class="form-control" name="cad_etapa_disciplina">
                                                <option value="">Selecione</option>                                               
                                                <option value="Creche 2">Creche 2</option>                                               
                                                <option value="Creche 3">Creche 3</option>                                               
                                                <option value="preescola 1">Pré - Escola 1</option>                                        
                                                <option value="preescola 2">Pré - Escola 2</option>                                        
                                                <option value="1º ano">1º ano</option>                                        
                                                <option value="2º ano">2º ano</option>                                        
                                                <option value="3º ano">3º ano</option>                                        
                                                <option value="4º ano">4º ano</option>                                        
                                                <option value="5º ano">5º ano</option>                                        
                                                <option value="6º ano">6º ano</option>                                        
                                                <option value="7º ano">7º ano</option>                                        
                                                <option value="8º ano">8º ano</option>                                        
                                                <option value="9º ano">9º ano</option>                                        
                                                <option value="fundamentalInicial">EJA - Ensino Fundamental
                                                    anos iniciais</option>                                        
                                                <option value="fundamentalFinal">EJA - Ensino Fundamental
                                                    anos finais</option>                                        
                                                <option value="fundamentalInicialeFinal">EJA - Ensino Fundamental
                                                    anos iniciais e anos finais</option>                                        
                                                <option value="fic">EJA - EJA integrada à Educação
                                                    Profissional de Nível Fundamental (FIC)</option>                                        
                                                <option value="urbano">EJA - Ensino Fundamental -
                                                    Projovem (Urbano)</option>                                        
                                                <option value="ensinomedio">EJA - Ensino Médio</option>                                        
                                                <option value="profissionalmedio">EJA integrada à Educação
                                                    Profissional de Nível Médio</option>                                        
                                            </select>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputProfessorDisciplina">5. Professor da disciplina</label><br>

                                            <select class="form-control" name="cad_professor_disciplina">
                                                <option value="">Selecione</option>                                              
                                            </select>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputTurmaDisciplina">6. Turma da disciplina</label><br>

                                            <select class="form-control" name="cad_turma_disciplina">
                                                <option value="">Selecione</option>                                              
                                            </select>
                                        </div>
                                    </div><br>

                                    <label for="inputDescricaoDisciplina">7. Descrição da disciplina</label><br>
                                    <textarea class="form-control" rows="6"></textarea><br>


                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>  
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO PROFESSOR</div>
                            <div class="panel-body box_conteudo">

                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputIdProfessor">1. INEP Professor</label>
                                                <input type="text" name="cad_id_professor" class="form-control" id="inputIdProfessor" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCpfProfessor">2. CPF</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">

                                            <div class="form-group">
                                                <label for="inputNomeProfessor">3. Nome do professor</label>
                                                <input type="text" name="cad_nome_professor" class="form-control" id="inputNomeProfessor" placeholder="digite nome do professor">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputNascimentoProfessor">4. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_professor" class="form-control" id="inputNascimentoProfessor" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMaeProfessor">5. Nome da mãe</label>
                                        <input type="text" name="cad_mae_professor" class="form-control" id="inputMaeProfessor" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPaiProfessor">6. Nome do pai</label>
                                        <input type="text" name="cad_pai_professor" class="form-control" id="inputPaiProfessor" placeholder="digite nome do pai">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputEmailProfessor">7.  Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_professor" class="form-control" id="inputEmailProfessor" placeholder="digite o Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputNisProfessor">8. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_professor" class="form-control" id="inputNisProfessor" placeholder="digite o NIS" required="" maxlength="11" onkeypress="formatar('###########', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoProfessor">9. Sexo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_professor" id="inputSexoProfessor" value="masculino"> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_professor" id="inputSexoProfessor" value="feminino"> Feminino
                                                </label>

                                            </div>


                                        </div>
                                        <div class="col-md-8">

                                            <div class="form-group">
                                                <label for="inputRacaProfessor">10. Cor/Raça</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="branca"> Branca
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="preta"> Preta
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="parda"> Parda
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="amarela"> Amarela
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="indigena"> Indígena
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="naodeclarada"> Não Declarada
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputNacionalidadeProfessor">11. Nacionalidade</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="brasileira"> Brasileira
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="brasileira – nascido no exterior ou naturalizado"> brasileira – nascido no exterior ou naturalizado
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="Estrangeira"> Estrangeira
                                    </label><br><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputPaisorigemProfessor">12. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_professor" class="form-control" id="inputPaisorigemProfessor" placeholder="digite o país de origem">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputUfdenascimentoProfessor">13. UF de nascimento</label>
                                                <select class="form-control" name="cad_estado_nasc_professor">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputMunidenascimentoProfessor">14. Município de nascimento</label>
                                                <input type="text" name="cad_muninasci_Professor" class="form-control" id="inputMunidenascimentoProfessor" placeholder="digite o município de nascimento">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNecessidadeEspecialProfessor">15. Profissional Escolar com deficiência</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="sim"> Sim
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="nao"> Não
                                        </label>
                                    </div>

                                    <label for="inputTipoDeficienciaProfessor">15a. Tipo de deficiência</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciaintelectual"> Deficiência Intelectual
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="baixavisao"> Baixa Visão
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="surdez"> Surdez
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciaauditiva"> Deficiência Auditiva
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="surdocegueira"> Surdocegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciafisica"> Deficiência Física
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="cegueira"> Cegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciamultipla"> Deficiência Múltipla
                                            </label>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputLocalizacaoProfessor">16. Localização/Zona de residência</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_professor" id="inputLocalizacaoProfessor" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_professor" id="inputLocalizacaoProfessor" value="rural"> Rural
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputCepProfessor">17. CEP</label>
                                                <input type="text" name="cad_cep_professor" class="form-control" id="inputCepProfessor" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEnderecoProfessor">18. Endereço</label>
                                                <input type="text" name="cad_endereco_professor" class="form-control" id="inputEnderecoProfessor" placeholder="digite o endereco">

                                            </div>
                                        </div>

                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoProfessor">19. Número</label>
                                                <input type="text" name="cad_numeroendereco_professor" class="form-control" id="inputNumeroEnderecoProfessor" placeholder="numero" onkeypress="return SomenteNumero(event);">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoProfessor">20. Complemento</label>
                                                <input type="text" name="cad_complementoendereco_professor" class="form-control" id="inputComplementoEnderecoProfessor" placeholder="complemento">

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairroProfessor">21. Bairro</label>
                                                <input type="text" name="cad_bairro_professor" class="form-control" id="inputBairroProfessor" placeholder="bairro">

                                            </div>
                                        </div>
                                    </div>                                   

                                    <label for="inputMunicipioProfessor">22. Município</label>
                                    <input type="text" name="cad_municipio_professor" class="form-control" id="inputMunicipioProfessor" placeholder="municipio"><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputEscolaridade">23. Escolaridade</label><br>

                                            <select class="form-control" name="cad_escolaridade_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="FundamentalIncompleto">Fundamental incompleto</option>                                               
                                                <option value="FundamentalCompleto">Fundamental completo</option>                                        
                                                <option value="EnsinoMedioMagisterio">Ensino Médio – Normal/Magistério</option>                                        
                                                <option value="EnsinoMedioIndigena">Ensino Médio – Normal/Magistério Específico Indígena</option>                                        
                                                <option value="EnsinoMedio">Ensino Médio</option>                                        
                                                <option value="Superior">Superior</option>                                        
                                            </select>

                                        </div>
                                        <div class="col-md-8">
                                            <label for="inputCursoProfessor">24. Curso</label>
                                            <input type="text" name="cad_curso_professor" class="form-control" id="inputCursoProfessor" placeholder="curso">
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label for="inputInstituicaoProfessor">25. Nome da instituição</label>
                                            <input type="text" name="cad_instituicao_professor" class="form-control" id="inputInstituicaoProfessor" placeholder="instituição">
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputEscolaridade">25a. Situação do curso superior</label><br>

                                            <select class="form-control" name="cad_situacao_curso_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="concluido">Concluído</option>                                               
                                                <option value="emandamento">Em andamento</option>                                       
                                            </select>
                                        </div>
                                    </div><br>

                                    <label for="inputPosProfessor">26. Pós-graduação</label>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Especialização"> Especialização
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Mestrado"> Mestrado
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Doutorado"> Doutorado
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Nenhum"> Nenhum
                                    </label><br><br>

                                    <label for="inputOutrosCursosProfessor">27. Outros cursos específicos (formação continuada com no mínimo 80 horas)</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Creche (0 a 3 anos)"> Creche (0 a 3 anos)
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Pré-escola (4 e 5 anos)"> Pré-escola (4 e 5 anos)
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Anos iniciais do ensino fundamental"> Anos iniciais do ensino fundamental
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="deficienciafisica"> Anos finais do ensino fundamental
                                            </label>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Ensino médio"> Ensino médio
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação de jovens e adultos"> Educação de jovens e adultos
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação especial"> Educação especial
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação indígena"> Educação indígena
                                            </label>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação do campo"> Educação do campo
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação ambiental"> Educação ambiental
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação em direitos humanos"> Educação em direitos humanos
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Gênero e diversidade sexual"> Gênero e diversidade sexual
                                            </label>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Direitos de criança e adolescente"> Direitos de criança e adolescente
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Relações etnorraciais e história e cultura afro-brasileira e africana"> Relações etnorraciais e história e cultura afro-brasileira e africana
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Outros"> Outros
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Nenhum"> Nenhum
                                            </label>
                                        </div>
                                    </div><br>

                                    <label for="inputFuncaoProfessor">28. Função que exerce</label><br>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Docente"> Docente
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Auxiliar/Assistente Educacional"> Auxiliar/Assistente Educacional
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Profissional/Monitor de Atividade"> Profissional/Monitor de Atividade
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Tradutor Intérprete de Libras"> Tradutor Intérprete de Libras
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="DocenteTitular – coordenador de tutoria (de módulo ou disciplina) – EAD"> DocenteTitular – coordenador de tutoria (de módulo ou disciplina) – EAD
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Docente tutor – Auxiliar (de módulo ou disciplina) – EAD"> Docente tutor – Auxiliar (de módulo ou disciplina) – EAD
                                    </label><br><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputFuncaoProfessor">29. Vínculo</label>                                    

                                            <select class="form-control" name="cad_vinculo_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="Concursado/efetivo/estável">Concursado/efetivo/estável</option>                                               
                                                <option value="Contrato temporário">Contrato temporário</option>                                       
                                                <option value="Contrato terceirizado">Contrato terceirizado</option>                                       
                                                <option value="Contrato CLT">Contrato CLT</option>                                       
                                            </select>
                                        </div>                   
                                    </div><br>


                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO ALUNO</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_aluno.php" method="post">

                                    <div class="form-group">
                                        <label for="inputIdAluno">1. Identificação Unica</label>
                                        <input type="text" name="cad_id_aluno" class="form-control" id="inputIdAluno" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="return SomenteNumero(event);" onblur="showride()">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomeAluno">2. Nome do aluno</label>
                                        <input type="text" name="cad_nome_aluno" class="form-control" id="inputNomeAluno" placeholder="digite nome do aluno">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">

                                            <div class="form-group">
                                                <label for="inputNascimentoAluno">3. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimentoAluno" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6">

                                            <div class="form-group">
                                                <label for="inputSexoAluno">4. Sexo :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexoAluno" value="masculino"> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexoAluno" value="feminino"> Feminino
                                                </label>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputNisAluno">5. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNisAluno" placeholder="digite o NIS" required="" maxlength="11" onkeypress="formatar('###########', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputRacaAluno">6. Cor/Raça :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="branca"> Branca
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="preta"> Preta
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="parda"> Parda
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="amarela"> Amarela
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="indigena"> Indígena
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="nao declarada"> Não Declarada
                                                </label>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMaeAluno">7. Nome da mãe</label>
                                        <input type="text" name="cad_mae_aluno" class="form-control" id="inputMaeAluno" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPaiAluno">8. Nome do pai</label>
                                        <input type="text" name="cad_pai_aluno" class="form-control" id="inputPaiAluno" placeholder="digite nome do pai">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNacionalidadeAluno">9. Nacionalidade do aluno :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="brasileira"> Brasileiro
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="naturalizado"> Naturalizado
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="extrangeiro"> Extrangeiro
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputPaisOrigemAluno">10. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_aluno" class="form-control" id="inputPaisOrigemAluno" placeholder="digite o país de origem">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputEstadoNascAluno">11. UF de nascimento</label>

                                                <select class="form-control" name="cad_estadonasc_aluno">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputTelefoneAluno">12. Telefone</label>
                                                <input type="text" name="cad_telefone_aluno" class="form-control" id="inputTelefoneAluno" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMunicipioNascAluno">13. Município de nascimento</label>
                                                <input type="text" name="cad_municipionasc_aluno" class="form-control" id="inputMunicipioNascAluno" placeholder="digite o município de nascimento">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputNecessidadeEspecialAluno">14. Aluno com deficiência, transtorno global do
                                                    desenvolvimento ou altas habilidades/superdotação :</label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_deficiencia_aluno" id="inputNecessidadeEspecialAluno" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_deficiencia_aluno" id="inputNecessidadeEspecialAluno" value="nao"> Não
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputTipoDeficienciaAluno">14a. Deficiência :</label><br>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Cegueira"> Cegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Baixa Visao"> Baixa Visão
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Surdez"> Surdez
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Deficiencia Auditiva"> Deficiência Auditiva
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Surdo Cegueira"> Surdocegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Deficiencia Fisica"> Deficiência Física
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Deficiencia Intelectual"> Deficiência Intelectual
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno" value="Deficiencia Multipla"> Deficiência Múltipla
                                            </label>                                            

                                        </div> 

                                        <div class="col-md-4">

                                            <label for="inputTranstornoGloAluno">14b. Transtorno global do desenvolvimento :</label><br>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornoGloAluno" value="Autismo Infantil"> Autismo Infantil
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornoGloAluno" value="Sindrome de Asperger"> Síndrome de Asperger 
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornoGloAluno" value="Sindrome de Rett"> Síndrome de Rett
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornoGloAluno" value="Transtorno Desintegrativo da Infancia"> Transtorno desintegrativo da infância
                                            </label>


                                        </div>
                                        <div class="col-md-4">

                                            <label for="inputSuperdotacaoAluno">14c. Altas Habilidades/Superdotação :</label><br>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputSuperdotacaoAluno" value="Super Dotacao"> Altas Habilidades/Superdotação
                                            </label>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputIdentidadeAluno">15. Número da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputIdentidadeAluno" placeholder="digite o numero da identidade" required="" maxlength="20" onkeypress="formatar('####################', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoIdentidadeAluno">15a. Complemento da identidade</label>
                                                <input type="text" name="cad_complemento_identidade_aluno" class="form-control" id="inputComplementoIdentidadeAluno" placeholder="digite o complemento da identidade" required="" maxlength="4" onkeypress="formatar('####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputOrgaoIdentidadeAluno">15b. Orgão emissor da identidade</label>
                                                <input type="text" name="cad_orgao_identidade_aluno" class="form-control" id="inputOrgaoIdentidadeAluno" placeholder="digite o orgao emissor">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEstadoIdentidadeAluno">15c. UF da identidade</label>

                                                <select class="form-control" name="cad_estado_identidade_aluno">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputDataIdentidadeAluno">15d. Data da expedição</label>
                                                <input type="text" name="cad_data_identidade_aluno" class="form-control" id="inputDataIdentidadeAluno" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCertidaoCivilAluno">16. Certidão Civil :</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="">Selecione</option>
                                                <option value="Modelo Novo">Modelo Novo</option>                                               
                                                <option value="Modelo Antigo">Modelo Antigo</option>
                                            </select> 

                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputTipoCertidaoAluno">16a. Tipo de certidão Civil :</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="">Selecione</option>
                                                <option value="Nascimento">Certidão de nascimento</option>                                               
                                                <option value="Casamento">Certidão de casamento</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTermoCertidaoAluno">16b. Número do termo</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputTermoCertidaoAluno" placeholder="digite o numero do termo" required="" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputFolhaCertidaoAluno">16c. Folha</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputFolhaCertidaoAluno" placeholder="folha" required="" maxlength="4" onkeypress="formatar('####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputLivroCertidaoAluno">16d. Livro</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputLivroCertidaoAluno" placeholder="livro" required="" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputDataCertidaoAluno">16e. Data de emissão da certidão</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputDataCertidaoAluno" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEstadoCartorioAluno">16f. UF do cartório</label>

                                                <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputMunicipioCartorioAluno">16g. Município do cartório</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputMunicipioCartorioAluno" placeholder="municipio do cartorio">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomeCartorioAluno">16h. Nome do cartório</label>
                                        <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNomeCartorioAluno" placeholder="digite o nome do cartorio">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputNumeroMatriculaAluno">16i. Número da matricula (Registro civil - Certidão nova)</label>
                                        <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNumeroMatriculaAluno" placeholder="numero da matricula" required="" maxlength="40" onkeypress="formatar('###### ## ## #### # ##### ### ####### ##', this); return SomenteNumero(event);" onblur="showride()">

                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputCpfAluno">17. Número do CPF</label>
                                            <input type="text" name="cad_cpf_aluno" class="form-control" id="inputCpfAluno" placeholder="digite o CPF" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">

                                        </div>
                                        <div class="col-md-4">

                                            <label for="inputPassaporteAluno">18. Documento extrangeiro/Passaporte</label>
                                            <input type="text" name="cad_passaporte_aluno" class="form-control" id="inputPassaporteAluno" placeholder="digite o passaporte" required="" maxlength="8" onkeypress="formatar('########', this)" onblur="showhide()">

                                        </div>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="inputJustificativaAluno">Justificativa da falta de informação de documento do aluno :</label><br>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_justificativa_aluno" id="inputJustificativaAluno" value="alunonaopossuidocumento"> Aluno não possui documento
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_justificativa_aluno" id="inputJustificativaAluno" value="escolanaopossuiinformaçãodedocumentodoaluno"> Escola não possui informação de documento do aluno
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputLocalizacaoAluno">19. Localização/Zona de residência :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacaoAluno" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacaoAluno" value="rural"> Rural
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCepAluno">20. CEP</label>
                                                <input type="text" name="cad_cep_aluno" class="form-control" id="inputCepAluno" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEnderecoAluno">21. Endereço</label>
                                                <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEnderecoAluno" placeholder="digite o endereco">

                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoAluno">22. Número</label>
                                                <input type="text" name="cad_numero_aluno" class="form-control" id="inputNumeroEnderecoAluno" placeholder="numero" onkeypress="return SomenteNumero(event);">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoAluno">23. Complemento</label>
                                                <input type="text" name="cad_complemento_aluno" class="form-control" id="inputComplementoEnderecoAluno" placeholder="complemento">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairroAluno">24. Bairro</label>
                                                <input type="text" name="cad_bairro_aluno" class="form-control" id="inputBairroAluno" placeholder="bairro">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputEstadoEnderecoAluno">25. UF</label>
                                                <select class="form-control" name="cad_estado_aluno">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select> 

                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="inputMunicipioAluno">26. Município</label>
                                                <input type="text" name="cad_municipio_aluno" class="form-control" id="inputMunicipioAluno" placeholder="municipio">

                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputEscolarizacaoEspacoAluno">27. Rececebe escolarização em outro espaço :</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspacoAluno" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspacoAluno" value="nao"> Não
                                    </label><br>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTransporteEscolarAluno">28. Transporte escolar público :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteEscolarAluno" value="utiliza"> Utiliza
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteEscolarAluno" value="não utiliza"> Não Utiliza
                                            </label>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPoderPublicoAluno">28a. Poder público responsável pelo transporte :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderPublicoAluno" value="municipal"> Municipal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderPublicoAluno" value="estadual"> Estadual
                                            </label>

                                        </div>
                                    </div><br>




                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTipoveiculoAluno">28b. Rodoviário :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Van/Kombi">Van/Kombi</option>                                               
                                                <option value="Micro - Ônibus">Micro - Ônibus</option>                                       
                                                <option value="Ônibus">Ônibus</option>                                       
                                                <option value="Bicicleta">Bicicleta</option>                                       
                                                <option value="Tração animal">Tração animal</option>                                       
                                                <option value="Outro tipo de veículo rodoviário">Outro tipo de veículo rodoviário</option>                                       
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputTipoveiculoAluno">28c. Aquaviário/Embarcação :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Capacidade de até 5 alunos">Capacidade de até 5 alunos</option>                                               
                                                <option value="Capacidade entre 5 a 15 alunos">Capacidade entre 5 a 15 alunos</option>                                       
                                                <option value="Capacidade entre 15 a 35 alunos">Capacidade entre 15 a 35 alunos</option>                                       
                                                <option value="Capacidade acima de 35 alunos">Capacidade acima de 35 alunos</option>                                      
                                            </select>
                                        </div>
                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="aprovacao">
                        <div class="panel panel-primary">
                            <div class="panel-heading">APROVAÇÃO DE USUÁRIOS PENDENTES</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/aprovando_usuario.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="inputNivelDisciplina">Usuários</label><br>
                                            <select class="form-control" name="id_aprovado">
                                                <?php
                                                foreach ($mostrar_pendentes as $linha_pendente) {
                                                    echo "<option value='" . $linha_pendente->id_usuario . "'>" . $linha_pendente->id_usuario . " Nome: " . $linha_pendente->nome_usuario . " - Fone: " . $linha_pendente->fone_usuario . " - Perfil: " . $linha_pendente->perfil_usuario . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <br><button type="submit" class="btn btn-primary btn-lg">Aprovar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
