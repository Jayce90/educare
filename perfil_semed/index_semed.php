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
                <div class="imagem_banner">
                    <img src="../imagens/logo.png">
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_escola" data-toggle="pill"> Cadastro Escola</a></li>
                    <li><a class="glyphicon glyphicon-book" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
                    <li><a class="glyphicon glyphicon-briefcase" href="#cad_professor" data-toggle="pill"> Cadastro Professor</a></li>
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

                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputIdEscola">1. Identificação Unica</label>
                                                <input type="text" name="cad_id_escola" class="form-control" id="inputIdEscola" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="formatar(, this)" onblur="showride()">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputCpfGestorEscola">2. Número do CPF do Gestor Escolar</label>
                                                <input type="text" name="cad_cpf_gestor_escola" class="form-control" id="inputCpfGestorEscola" placeholder="CPF gestor escolar" required="" maxlength="14" onkeypress="formatar ('###.###.###-##', this)" onblur="showhide()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputCargoGestorEscola">3. Cargo</label><br>

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
                                                <label for="inputEmailGestorEscola">4. Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_gestor_escola" class="form-control" id="inputEmailGestorEscola" placeholder="digite o Email">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputFuncionamentoEscola">5. Situação de funcionamento</label>

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

                                    <label for="inputNomeEscola">6. Nome da escola</label>
                                    <input type="text" name="cad_nome_escola" class="form-control" id="inputNomeEscola" placeholder="nome da escola"><br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputCepEscola">7. CEP</label>
                                                <input type="text" name="cad_cep_escola" class="form-control" id="inputCepEscola" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this)" onblur="showride()">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputUfEscola">8. UF</label>

                                                <select class="form-control" name="cad_uf_escola">
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputMunicipioEscola">9. Município</label>
                                                <input type="text" name="cad_municipio_escola" class="form-control" id="inputMunicipioEscola" placeholder="digite o Municipio">
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
                                                <input type="text" name="cad_numero_escola" class="form-control" id="inputNumeroEscola" placeholder="digite o numero">
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
                                                <input type="text" name="cad_fone_escola" class="form-control" id="inputFoneEscola" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this)" onblur="showhide()">
                                            </div>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputOutroFoneEscola">16. Outro telefone</label>
                                                <input type="text" name="cad_outro_fone_escola" class="form-control" id="inputOutroFoneEscola" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this)" onblur="showhide()">
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

                                <form action="" method="post">

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
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this)" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">3. Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this)" onblur="showhide()">
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

                                    <label for="inputMaiseducacao">6. Turma participante do programa mais educação/Ensino médio inovador</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_maiseducacao_turma" id="inputMaiseducacao" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_maiseducacao_turma" id="inputMaiseducacao" value="nao"> Não
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
                                                <label for="inputIdProfessor">1. Identificação Unica</label>
                                                <input type="text" name="cad_id_professor" class="form-control" id="inputIdProfessor" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="formatar(, this)" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCpfProfessor">2. CPF</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this)" onblur="showhide()">
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
                                                <input type="text" name="cad_nasc_professor" class="form-control" id="inputNascimentoProfessor" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this)" onblur="showride()">
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
                                                <input type="text" name="cad_nis_professor" class="form-control" id="inputNisProfessor" placeholder="digite o NIS" required="" maxlength="14" onkeypress="formatar('########### ##', this)" onblur="showride()">
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
                                    </div><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputPaisorigemProfessor">11. País de origem</label>
                                                <input type="text" name="cad_paisorigem_professor" class="form-control" id="inputPaisorigemProfessor" placeholder="digite o país de origem">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputUfdenascimentoProfessor">12. UF de nascimento</label>
                                                <select class="form-control" name="cad_estadonasc_professor">
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
                                                <label for="inputMunidenascimentoProfessor">13. Município de nascimento</label>
                                                <input type="text" name="cad_muninasci_Professor" class="form-control" id="inputMunidenascimentoProfessor" placeholder="digite o município de nascimento">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNecessidadeEspecialProfessor">14. Profissional Escolar com deficiência</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="sim"> Sim
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="nao"> Não
                                        </label>
                                    </div>

                                    <label for="inputTipoDeficienciaProfessor">14a. Tipo de deficiência</label>

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
                                                <label for="inputLocalizacaoProfessor">15. Localização/Zona de residência</label><br>

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
                                                <label for="inputCepProfessor">16. CEP</label>
                                                <input type="text" name="cad_cep_professor" class="form-control" id="inputCepProfessor" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this)" onblur="showride()">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEnderecoProfessor">17. Endereço</label>
                                                <input type="text" name="cad_endereco_professor" class="form-control" id="inputEnderecoProfessor" placeholder="digite o endereco">

                                            </div>
                                        </div>

                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoProfessor">18. Número</label>
                                                <input type="text" name="cad_numeroendereco_professor" class="form-control" id="inputNumeroEnderecoProfessor" placeholder="numero">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoProfessor">19. Complemento</label>
                                                <input type="text" name="cad_complementoendereco_professor" class="form-control" id="inputComplementoEnderecoProfessor" placeholder="complemento">

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairroProfessor">20. Bairro</label>
                                                <input type="text" name="cad_bairro_professor" class="form-control" id="inputBairroProfessor" placeholder="bairro">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputUfProfessor">21. UF</label>
                                                <select class="form-control" name="cad_estado_professor">
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
                                                <label for="inputMunicipioProfessor">22. Município</label>
                                                <input type="text" name="cad_municipio_professor" class="form-control" id="inputMunicipioProfessor" placeholder="municipio">

                                            </div>
                                        </div>
                                    </div>

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

                </div>
            </div>

        </div>
    </body>
</html>
