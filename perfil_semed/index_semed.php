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
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_notas" data-toggle="pill"> Cadastro Professor</a></li>
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

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputTurma">1. Nome da Turma</label>
                                                <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputMaiseducacao">2. Ano da turma :</label><br>

                                            <select class="form-control" name="ano_turma">
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
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="horário inicio">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">3. Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="horário final">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTurno">3a. Turno :</label><br>

                                            <select class="form-control" name="turno_turma">
                                                <option value="manha">Manhã</option>                                               
                                                <option value="tarde">Tarde</option>                                        
                                                <option value="noite">Noite</option>                                        
                                                <option value="intermediario">Intermediário</option>                                        
                                                <option value="integral">Integral</option>                                        
                                            </select>
                                        </div>
                                    </div>


                                    <label for="inputDiassemana">4. Dias da semana da turma :</label><br>

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


                                    <label for="inputAtendimento">5. Tipo de atendimento :</label><br>

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
                                    </label><br>

                                    <label for="inputMaiseducacao">6. Turma participante do programa mais educação/Ensino médio inovador :</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_maiseducacao_turma" id="inputMaiseducacao" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_maiseducacao_turma" id="inputMaiseducacao" value="nao"> Não
                                    </label><br><br>


                                    <div class="form-group">
                                        <label for="inputAeeatividades">7. Atividades do atendimento educacional especializado (AEE) :</label><br>


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


                                    <label for="inputModalidade">8. Modalidade :</label><br>
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
                                            <label for="inputNivel">9. Nivel de ensino :</label><br>

                                            <select class="form-control" name="nivel_turma">
                                                <option value="infantil">Educação Infantil</option>                                               
                                                <option value="Fundamental">Ensino Fundamental</option>                                        
                                                <option value="Eja">EJA</option>                                        
                                            </select>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputEtapa">9a. Etapa :</label><br>

                                            <select class="form-control" name="etapa_turma">
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

                                    <label for="inputDescricaodaturma">10. Descrição da turma :</label><br>
                                    <textarea class="form-control" rows="6"></textarea><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_notas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO PROFESSOR</div>
                            <div class="panel-body">

                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputIdProfessor">1. Identificação Unica</label>
                                                <input type="text" name="cad_id_professor" class="form-control" id="inputIdProfessor" placeholder="digite a identificação unica">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCpfProfessor">2. CPF</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF">
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
                                                <input type="text" name="cad_nasc_professor" class="form-control" id="inputNascimentoProfessor" placeholder="digite a data de nascimento">
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
                                                <input type="text" name="cad_nis_professor" class="form-control" id="inputNisProfessor" placeholder="digite o NIS">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoProfessor">9. Sexo :</label><br>

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
                                                <label for="inputRacaProfessor">10. Cor/Raça :</label><br>

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
                                    </div><br>


                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>





                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </body>
</html>
